<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Subject, Attendance, Classroom, User};


class AttendanceStudentController extends Controller
{
    public function index()
    {
        $subjectTeachers = Subject::where('teacher_id', auth()->id())
        ->with([ 'classrooms'])->orderBy('name', 'asc')->get();

        return view('teacher.attendanceStudent.index', compact('subjectTeachers'));
    }

    public function create(Classroom $classroom)
    {
        $students = User::where('classroo_id', $classroom)->pluck('name', 'id');

        dd($students);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Attendance $attendanceStudent)
    {
        $studentClassroom = User::where('classroom_id', $attendanceStudent);
        dd($studentClassroom);

        return view('teacher.attendanceStudent.show', compact('attendanceStudent'));
    }

    public function edit($id)
    {
        //
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
