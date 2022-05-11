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
        // $teachers = Subject::with('teacherSubject')->get();
      
    //   dd($teachers);
        $teacherSubjects = User::whereHas('teacherSubject', function($query){
            $query->groupBy('role_id')->orderBy('name');
        })->get(); // 14

        return view('admin.teacherSubject.index', compact('teacherSubjects'));
    }

    public function create()
    {
        return view('admin.teacherSubject.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.teacherSubject.show');
    }

    public function edit($id)
    {
        return view('admin.teacherSubject.edit');
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
