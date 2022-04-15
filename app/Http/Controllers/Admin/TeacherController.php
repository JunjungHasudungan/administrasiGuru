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
        
        $teacherSubjects = User::whereHas('teacherSubject', function($query){
            $query->groupBy('role_id')->orderBy('name');
        })->get(); // 14

        // dd($teacherSubjects);

        return view('admin.teacherSubject.index', compact('teacherSubjects'));
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
