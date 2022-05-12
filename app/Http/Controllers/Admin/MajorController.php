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
        $majors = Major::with(['headOfDepartement', 'teacherMajors', 'studentMajors'])->get();

        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {
        $departement_head_candidate = User::where('teacher_major', ">", 0)->pluck('name', 'id');

        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        // dd($teachers);

        return view('admin.majors.create', compact('departement_head_candidate', 'teachers'));
    }

    public function store(StoreMajorRequest $request)
    {

        $major = Major::create($request->all());
        
        return redirect()->route('admin.majors.index');
    }

    public function show(Major $major)
    {
        $major->load(['headOfDepartement', 'teacherMajors', 'studentMajors']);

        return view('admin.majors.show', compact('major'));
    }

    public function edit( Major $major)
    {
        $departement_head_candidate = User::where('teacher_major', ">", 0)->pluck('name', 'id');

         $major->load('departement');
       
        return view('admin.majors.edit', compact('major', 'departement_head_candidate'));
    }

    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->all());

        return redirect()->route('admin.majors.index');
    }

    public function destroy(Major $major)
    {

        $major->delete();

        return back()->with('success', 'Article <span class="italic font-medium">deleted</span> successfully.');
    }
}
