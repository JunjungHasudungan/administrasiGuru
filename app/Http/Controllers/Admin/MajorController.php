<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Classes;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        // $major = Major::all();
        // $major->load('teacherMajors')->dd();
        $majors = Major::with(['headOfDepartement', 'teachers', 'studentMajors'])->get();

        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {

        $departement_head_candidate = User::where('role_id', 3)->pluck('name', 'id');

        $teacher_major = User::where('role_id', 3)->pluck('name', 'id');

        return view('admin.majors.create', compact('departement_head_candidate', 'teacher_major'));
    }

    public function store(StoreMajorRequest $request)
    {
        $major = Major::create($request->all());

        $major->teachers()->sync($request->input('teachers', []));
        
        // dd($major);
        return redirect()->route('admin.majors.index');
    }

    public function show(Major $major)
    {
        $major->load(['headOfDepartement', 'teachers', 'studentMajors', 'classrooms']);

        // dd($major);
        return view('admin.majors.show', compact('major'));
    }

    public function edit( Major $major)
    {
        $teacher_major = User::where('teacher_major', '>', 0)->pluck('name', 'id');

        $major->load('headOfDepartement');
    //  
    //  dd($teacher_major);

        return view('admin.majors.edit', compact('major', 'teacher_major'));
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
