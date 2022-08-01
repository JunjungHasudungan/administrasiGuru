<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StoreUserRequest, UpdateUserRequest};
use App\Models\{
    Classroom,
     Role, 
     User, 
     Major, 
     Subject
    };
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with(['classroom','major', 'role', 'subjects', 'subjectStudent', 'majorTeacher'])
        ->when(request()->search, function($users){
            $users = $users->where('name', 'like', '%'. request()->search . '%');
        })->orderBy('name', 'asc')->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');

        $classrooms = Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles', 'classrooms', 'majors'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        // $user->subjectStudent()->sync($request->input('subjects', []));

        // dd($user);
        return redirect()->route('admin.users.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(User $user)
    {
        // dd($user->load('classroomSubject'));
         $user->load(['subjects','studentMajor', 'major', 'majorTeacher','classroomSubject', 'teacherSubject']);
        
        // dd($s);
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $classrooms = Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        // $subjects = Subject::all()->pluck('name', 'id');
        
        // dd($user->load('role'));
        $user->load('role', 'classroom', 'major', 'subjectStudent');

        return view('admin.users.edit', compact( 'user', 'classrooms', 'majors', 'subjects'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());

        $user->subjectStudent()->sync($request->input('subjects', []));

        // dd($user);

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
