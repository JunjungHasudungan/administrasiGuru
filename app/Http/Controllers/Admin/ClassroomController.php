<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StoreClassroomRequest, UpdateClassroomRequest};
// use App\Http\Requests\UpdateClassroomRequest;
use App\Models\{Classroom, Major, User};
// use App\Models\Major;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class ClassroomController extends Controller
{
    public function index()
    {   
        $classrooms = Classroom::with(['students', 'homeworkTeacher','classroomSubject', 'major'])->latest()
        ->when(request()->search, function($classrooms){
            $classrooms = $classrooms->where('name_class', 'like', '%' . request()->search . '%');
        })
        ->when(request()->code_classroom, function($classrooms){
             $classrooms->where('code_classroom', 'like', '%' . request()->search . '%');
        })
        ->orderBy('name_class', 'asc')->paginate(5);

        return view('admin.classrooms.index', compact('classrooms'));
    }

    public function create()
    {
    //    $students = User::where('role_id', 2)->orderBy('name', 'asc')->pluck('name', 'id');

    //    dd($students);
        $majors = Major::all()->pluck('title', 'id');

        $teachers = User::where('role_id', 3)->orderBy('name', 'asc')->pluck('name','id');

        return view('admin.classrooms.create', compact('majors', 'teachers'));
    }

    public function store(StoreClassroomRequest $request)
    {
       
    //    $student_id =  $request->input('student');

        $classrooms = Classroom::insert($request->validated());

        // dd($classrooms);
        return redirect()->route('admin.classrooms.index');
    }

    public function show(Classroom $classroom)
    {
       $classroom->load(['homeworkTeacher', 'students']);
        
        return view('admin.classrooms.show', compact('classroom'));
    }

    public function edit(Classroom $classroom)
    {
        $teachers = User::where('role_id', 3)->pluck('name','id');

        $majors = Major::all()->pluck('title', 'id');

        $classroom->load( 'homeworkTeacher', 'major');
        
        return view('admin.classrooms.edit', compact('classroom', 'majors', 'teachers'));
    }

    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        $c = $classroom->update($request->all());

        return redirect()->route('admin.classrooms.index');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return back();
    }
}
