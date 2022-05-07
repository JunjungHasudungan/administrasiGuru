<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassesRequest;
use App\Models\Classroom;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class ClassroomController extends Controller
{
    public function index()
    {

        $classrooms = Classroom::with(['students', 'homeworkTeacher','classroomSubject', 'majors'])->get();

        return view('admin.classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        $majors = Major::all()->pluck('title', 'id');

        $teachers = User::where('role_id', '=', 3)->pluck('name','id');

        return view('admin.classrooms.create', compact('majors', 'teachers'));
    }

    public function store(StoreClassesRequest $request)
    {
        $classroom = Classroom::insert($request->validated());

        dd($classroom);
        // return back();
    }

    public function show(Classroom $classroom)
    {
        $classroom->load(['classroomSubject']);
        
        return view('admin.classrooms.show', compact('classroom'));
    }

    public function edit(Classroom $classroom)
    {
        $classroom->load('students', 'classroomSubject');
        
        return view('admin.classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    public function destroy(Classroom $classroom)
    {
        //
    }
}
