<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Method;
use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\TeacherAdministration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherAdministrationController extends Controller
{

    public function index()
    {
        $administrations = User::with('administrations')->where('role_id', 3)->get();
        // $administrations = Administration::with(['administrationTeacher', 'classrooms', 'subjects'])->get();

        // dd($administrations);
        return view('admin.teacherAdministrations.index', compact('administrations'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Administration $teacher)
    {
        // $teacherAdministration = Administration::where('adminis$teacher', $teacher)->get();
       
        $teacher->load('administrations', 'subjects');

        // dd($teacher);
        return view('admin.teacherAdministrations.show', compact('teacher'));
    }

    public function edit(TeacherAdministration $userP)
    {
        //
    }

    public function update(Request $request, TeacherAdministration $userP)
    {
        //
    }

    public function destroy(TeacherAdministration $teacherAdministration)
    {
        //
    }
}
