<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherAdministrationRequest;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\TeacherAdministration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherAdministrationController extends Controller
{

    public function index()
    {
        $idTeacher = Auth::user()->id;
        $teacherAdministration = TeacherAdministration::where('teacher_id', $idTeacher)->get();
        // $teacherAdministration = TeacherAdministration::where('teacher_id', $idTeacher)->get();
       
        return view('teacher.teacherAdministration.index', compact('teacherAdministration'));
    }

    public function create()
    {
        $idTeacher = Auth::user()->id;
     
        $classrooms  = Classroom::all()->pluck('name_class', 'id');
        
        $subjects = Subject::where('teacher_id', $idTeacher)->pluck('name', 'id');
        
        // dd($classrooms);
         return view('teacher.teacherAdministration.create', compact('subjects', 'classrooms'));   
    }

    public function store(StoreTeacherAdministrationRequest $request)
    {
        $teacherAdministration = TeacherAdministration::create($request->all());

        // $teacherAdministration->teachers()->sync($request->input('classrooms', []));

        // dd($teacherAdministration);
        return redirect()->route('teacher.teacherAdministration.index');
    }

    public function show(TeacherAdministration $teacherAdministration)
    {
        //
    }

    public function edit(TeacherAdministration $teacherAdministration)
    {
        //
    }

    public function update(Request $request, TeacherAdministration $teacherAdministration)
    {
        //
    }

    public function destroy(TeacherAdministration $teacherAdministration)
    {
        //
    }
}
