<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Subject, Attendance, Classroom, User, Major};
// use Illuminate\Support\Facades\Auth;

class AttendanceStudentController extends Controller
{
 

    public function index()
    {
        $attendances = Subject::where('teacher_id', auth()->id())->with('classrooms')->get();
        // Classroom::with()
        // dd($attendances);
        return view('teacher.attendanceStudent.index', compact('attendances'));
    }

    public function create()
    {
        // $subject = Subject::where('teacher_id', auth()->id())->get();
        // dd($subject);
        return view('teacher.attendanceStudent.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Attendance $attendanceStudent)
    {
        // $studentClassroom = User::where('classroom_id', $attendanceStudent);
       
        dd($attendanceStudent);

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
