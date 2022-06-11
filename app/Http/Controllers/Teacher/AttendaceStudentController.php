<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttendaceStudentController extends Controller
{
    public function index()
    {
        $teacherId = Auth::user()->id;

        $subjectTeacher = Subject::where('teacher_id', $teacherId)->orderBy('name', 'asc')->get();

        // dd($subjectTeacher);

        return view('teacher.attendanceStudent.index', compact('subjectTeacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjectTeacher = Subject::where('teacher_id', auth()->id())->get();

        $studentsSubject = DB::table('subject_student')->where('subject_id', $subjectTeacher)->get();
       
        // $students = Subject::with('students')->get();

        // $studentSubject = Subject::with('subjectStudent')->get();

        dd($studentsSubject);
        return view('teacher.attendanceStudent.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
