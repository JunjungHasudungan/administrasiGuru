<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teacherSubjectCount = DB::table('teacher_subject')->groupBy('teacher_id')->count();
       
        dd($teacherSubjectCount);
        // return view('admin.teacherSubject.index', compact('teacherSubjects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
