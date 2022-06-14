<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\{Subject, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Gate};

class SubjectController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage-courses')) {
            abort(403);
        }
        $subjects = Subject::with('classrooms', 'weekDaySubject')->latest()
        ->when(request()->search, function($subjects){
            $subjects = $subjects->where('name', 'like' ,'%' . request()->search .'%');
        })
        ->where('teacher_id', auth()->id())->orderBy('name', 'asc')->paginate(5);
    
        return view('teacher.subjects.index', compact('subjects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Subject $subject)
    {
        $subjectTeacher = Subject::where('teacher_id', auth()->id())->get();

        $subjectStudent = Subject::with(['studentSubject', 'classrooms'])->get();

        return view('teacher.subjects.show', compact('subject',  'subjectStudent'));
    }

    public function edit(Subject $subject)
    {
        //
    }

    public function update(Request $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
}
