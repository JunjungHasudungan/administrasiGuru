<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('classrooms')->get();
        $teachers = Role::find(4)->users()->get();
        // $teachers = User::with(['classes', 'teacherLessons'])->get();
        // $teacher = Role::find(4);
        // $teachers = $teacher->teachers->name;
        // $students = Role::with('users')->students()->get();

        // dd($teachers

        // $headmaster = Role::find(1)->users()->orderBy('name', 'asc')->count(); // headmaster = 1
        // $kurikulum = Role::find(2)->users()->orderBy('name', 'asc')->count(); // kurikulum = 1
        // $homeworkTeachers = Role::find(3)->users()->orderBy('name', 'asc')->count(); // homeTeachers = 5
        // $teachers = Role::find(4)->users()->orderBy('name', 'asc')->count(); // teachers = 15
        // $students = Role::find(5)->users()->orderBy('name', 'asc')->count(); // students = 13

        // dd([$headmaster, $kurikulum, $homeworkTeachers, $teachers, $students]);

        // $admin = $user->frist_name;
        // return view('admin.teachers.index', compact('teachers'));
        dd([$teachers, $users]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
