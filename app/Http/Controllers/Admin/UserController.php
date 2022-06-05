<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Classroom;
use App\Models\Role;
use App\Models\User;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with(['classrooms','major', 'role', 'subjects', 'studentSubject', 'majorTeacher'])
        ->orderBy('name', 'asc')->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');

        $classrooms = Classroom::all()->pluck('name_class', 'id');

        $subjects = Subject::all()->pluck('name', 'id');

        $majors = Major::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles', 'classrooms', 'subjects', 'majors'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        $user->studentSubject()->sync($request->input('subjects', []));

        // dd($user);
        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        $user->load(['subjects','studentMajor', 'major', 'majorTeacher','studentSubject', 'teacherSubject']);
        
        // dd($user->load('major'));
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $classrooms = Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        $user->load('classrooms', 'major');

        return view('admin.users.edit', compact('user', 'classrooms', 'majors'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
