<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::paginate(5);
        // dd($subjects);
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name', 'id');

        return view('admin.subjects.create', compact('teachers', 'classrooms'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Subject $subject)
    {
        return view('admin.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
}
