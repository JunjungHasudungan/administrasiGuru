<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $subjectTeachers = Subject::where('teacher_id', auth()->id())
        ->with([ 'classrooms'])->orderBy('name', 'asc')->get();

        return view('teacher.attendanceStudent.index', compact('subjectTeachers'));
    }

    public function create(Attendance $attendance)
    {
      $users = User::where('classroom_id', $attendance)->pluck('name', 'id');

      dd($users);
       return view('teacher.attendanceStudent.create', compact('studentSubject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        $attendance->load(['student']);

        return view('teacher.attendanceStudent.show', compact('attendance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
