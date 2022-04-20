<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class ClassroomController extends Controller
{
    public function index()
    {

        $classrooms = Classroom::with(['students', 'homeworkTeacher', 'majors'])->get();
        // dd($students);

        return view('admin.classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Classroom $classroom)
    {
        $classroom->load('students', 'homeworkTeacher');

        return view('admin.classrooms.show', compact('classroom'));
    }

    public function edit(Classroom $classroom)
    {
        //
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
