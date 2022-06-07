<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Major;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers =  User::with('subjects')->latest()->when(request()->search, function($teachers){
            $teachers = $teachers->where('name', 'like', '%' . request()->search . '%');
        })
        ->where('role_id', 3)->orderBy('name', 'asc')->paginate(5);
      
        // dd($teachers);

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        $majors = Major::all()->pluck('title', 'id');
        
        $subjects = Subject::all()->pluck('name', 'id');

        return view('admin.teachers.create', compact('teachers', 'majors', 'subjects'));
    }

    public function store(StoreTeacherRequest $request)
    {
        $teachers = User::create($request->all());

        // dd($teachers);

        return redirect()->route('admin.teachers.index');
    }

    public function show(User $user)
    {
        // $teacher = User::where('id', $user)->get();
        $user->load('subjects');

        // dd($user);

        return view('admin.teachers.show', compact('user'));
    }

    public function edit($id)
    {
        return view('admin.teachers.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
