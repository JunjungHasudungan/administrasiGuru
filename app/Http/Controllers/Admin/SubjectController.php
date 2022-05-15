<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubjectRequest;
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

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        return view('admin.subjects.create', compact('teachers', 'classrooms'));
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());

        $subject->classrooms()->sync($request->input('classrooms', []));
        
        // dd($subject);

        return redirect()->route('admin.subjects.index');
    }

    public function show(Subject $subject)
    {
         $subject->load(['teachers', 'classrooms']);

        // dd($subject_all);
        return view('admin.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        $subject->load('teachers', 'classrooms');

        return view('admin.subjects.edit', compact('subject', 'teachers', 'classrooms'));
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
