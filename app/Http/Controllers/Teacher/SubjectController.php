<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SubjectController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage-courses')) {
            abort(403);
        }
        $name  = Auth::user()->name;

        $id = Auth::user()->id;
        
        $subjects = Subject::with('classrooms', 'weekDaySubject')->orderBy('name', 'asc')->where('teacher_id', $id)->get();
    
        // dd($subjects);
        return view('teacher.subjects.index', compact(['subjects', 'name']));
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
        return view();
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
