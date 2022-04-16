<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    public function index()
    {
        // $classrooms= Classroom::whereHas('students', function($query){
        //     $query->where('classroom_id', 3);        
        // })->get();
        $students = Classroom::whereHas('students', function($query){
            $query->where('classroom_id', 1)->orderBy('name');
        })->get();

        return view('admin.classrooms.index', compact('students'));
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
        $classroom->load('students', 'homeworkTeachers');

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
