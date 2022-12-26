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

    public $subjects;

    public function __construct()
    {
        $this->subjects = new Subject();
    }

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
        $teachers = User::where('role_id', 3)->orderBy('name', 'asc')->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        // $weekDaySubject = WeekDaySubject::all()->pluck('name', 'id');

        return view('admin.subjects.create', compact('teachers', 'classrooms', 'majors'));
    }

    public function store(StoreSubjectRequest $request)
    {
        $request->validate([
            'subject_code'      =>  'required:unique',
            'name'              =>  'required|string|max:25',
            'teacher_id'        =>  'required',
            'major_id'          =>  'required|max:1' 
        ], [
            'major_id.max'      => 'Jurusan tidak boleh dari 1'
        ]);

        $this->subjects->create([
            'subject_code'      => $request['subject_code'],
            'name'              => $request['name'],
            'teacher_id'        => $request['teacher_id'],
            'major_id'          => $request['major_id'] 
        ]);

        // $major_id = DB::table('subjects')->whereIn('major_id', $request->input('major_id'))->get();
        // $subject = Subject::create($request->all());

        // $subject->classrooms()->sync($request->input('classrooms', []));

        // $subject->majorSubject()->sync($request->input('majors', []));

        // $subject->weekDaySubject()->sync($request->input('days', []));
        
        // dd($major_id);

        return redirect()->route('admin.subjects.index');
    }

    public function show(Subject $subject)
    {
         $subject->load(['teachers', 'classrooms', 'major', 'weekDaySubject']);

        // dd($subject_all);
        return view('admin.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject)
    {
        $teachers = User::where('role_id', 3)->orderBy('name', 'asc')->pluck('name', 'id');

        $classrooms= Classroom::all()->pluck('name_class', 'id');

        $majors = Major::all()->pluck('title', 'id');

        // $weekDaySubject = WeekDaySubject::all()->pluck('name', 'id');

        $subject->load('teachers', 'classrooms', 'majorSubject', 'weekDaySubject');

        return view('admin.subjects.edit', compact('subject', 'teachers', 'classrooms', 'majors'));
    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->all());

        $subject->classrooms()->sync($request->input('classrooms', []));

        $subject->majorSubject()->sync($request->input('majors', []));

        // $subject->weekDaySubject()->sync($request->input('days', []));

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
