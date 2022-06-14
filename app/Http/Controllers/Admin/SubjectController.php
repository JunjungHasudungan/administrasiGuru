<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StoreSubjectRequest, UpdateSubjectRequest};
// use App\Http\Requests\UpdateSubjectRequest;
use App\Models\{Subject, Classroom, User, Major, WeekDaySubject};
// use App\Models\Classroom;
// use App\Models\User;
// use App\Models\Major;
// use App\Models\WeekDaySubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Gate};
// use Illuminate\Support\Facades\Gate;


class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::latest()->when(request()->search, function($subjects){
            $subjects = $subjects->where('name', 'like', '%' . request()->search . '%');
        })->paginate(5);
        // dd($subjects);
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        $weekDaySubject = WeekDaySubject::all()->pluck('name', 'id');

        return view('admin.subjects.create', compact('teachers', 'classrooms', 'majors', 'weekDaySubject'));
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());

        $subject->classrooms()->sync($request->input('classrooms', []));

        $subject->majorSubject()->sync($request->input('majors', []));

        $subject->weekDaySubject()->sync($request->input('days', []));
        
        // dd($subject);

        return redirect()->route('admin.subjects.index');
    }

    public function show(Subject $subject)
    {
         $subject->load(['teachers', 'classrooms', 'majorSubject', 'weekDaySubject']);

        // dd($subject_all);
        return view('admin.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        $teachers = User::where('role_id', 3)->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        $weekDaySubject = WeekDaySubject::all()->pluck('name', 'id');

        $subject->load('teachers', 'classrooms', 'majorSubject', 'weekDaySubject');

        return view('admin.subjects.edit', compact('subject', 'teachers', 'classrooms', 'majors', 'weekDaySubject'));
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());

        $subject->classrooms()->sync($request->input('classrooms', []));

        $subject->majorSubject()->sync($request->input('majors', []));

        $subject->weekDaySubject()->sync($request->input('days', []));

        // dd($subject);
        return redirect()->route('admin.subjects.index');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        // dd($subject, 'berhasil dihapus');

        return back();
    }
}
