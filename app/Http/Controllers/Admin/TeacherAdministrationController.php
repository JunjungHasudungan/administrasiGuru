<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Method;
use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\TeacherAdministration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherAdministrationController extends Controller
{

    public function index()
    {
        $administrations = Administration::with('teachers')->get();

        // dd($teacherAdministrations);
        return view('admin.teacherAdministrations.index', compact('administrations'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Administration $administration)
    {
        $administration->load('classrooms', 'teachers', 'subjects');
       
        // dd($administration);

        return view('admin.teacherAdministrations.show', compact('administration'));
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
