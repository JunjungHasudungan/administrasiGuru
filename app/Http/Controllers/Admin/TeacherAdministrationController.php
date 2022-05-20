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
        $administrations = Administration::with('teachers')->latest()->paginate(5);

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

    public function show(Administration $teacherAdministration)
    {
         $teacherAdministration->load('teachers', 'classrooms');
        // dd($teacherAdministration);

        return view('admin.teacherAdministrations.show', compact('teacherAdministration'));
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
