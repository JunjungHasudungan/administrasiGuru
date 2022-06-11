<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Major;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::with(['headOfDepartement', 'teachers', 'studentMajors'])->latest()
        ->when(request()->search, function($majors){
            $majors = $majors->where('title', 'like', '%' . request()->search . '%');
        })->orderBy('title', 'asc')->get();

        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {

        $departement_head_candidate = User::where('role_id', 3)->pluck('name', 'id');

        $teacher_major = User::where('role_id', 3)->pluck('name', 'id');

        $classrooms = Classroom::all()->pluck('name_class', 'id');

        return view('admin.majors.create', compact('departement_head_candidate', 'teacher_major', 'classrooms'));
    }

    public function store(StoreMajorRequest $request)
    {
        $major = Major::create($request->all());

        $major->teachers()->sync($request->input('teachers', []));

        $major->classroomMajor()->sync($request->input('classrooms', []));
        
        // dd($major);
        return redirect()->route('admin.majors.index');
    }

    public function show(Major $major)
    {
        $major->load(['headOfDepartement', 'teachers', 'classrooms', 'majorSubject']);

        return view('admin.majors.show', compact('major'));
    }

    public function edit( Major $major)
    {
        $teacher_major = User::where('teacher_major', '>', 0)->pluck('name', 'id');

        $subjects = Subject::all()->pluck('name', 'id');

        $classrooms = Classroom::all()->pluck('name_class', 'id');

        $major->load('headOfDepartement', 'majorSubject', 'classrooms', 'teachers');
    //  
    //  dd($teacher_major);

        return view('admin.majors.edit', compact('major', 'teacher_major', 'subjects', 'classrooms'));
    }

    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->all());

        $major->teachers()->sync($request->input('teachers', []));

        // dd($major);
        return redirect()->route('admin.majors.index');
    }

    public function destroy(Major $major)
    {

        $major->delete();

        return back()->with('success', 'Jurusan <span class="italic font-medium">deleted</span> successfully.');
    }
}
