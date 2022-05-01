<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeacherAdministration;
use Illuminate\Http\Request;

class TeacherAdministrationController extends Controller
{

    public function index()
    {
        $teacherAdministrations = TeacherAdministration::with('teachers')->get();

        // dd($teacherAdministrations);
        return view('admin.teacherAdministration.index', compact('teacherAdministrations'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(TeacherAdministration $teacherAdministration)
    {
        $teacherAdministration->load(['teachers','major']);

        return view('admin.teacherAdministration.show', compact('teacherAdministration'));
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
