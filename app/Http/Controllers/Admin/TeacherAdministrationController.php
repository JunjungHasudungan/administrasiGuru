<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Method;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdministrationRequest;
use App\Models\{Administration, TeacherAdministration, User};
// use App\Models\TeacherAdministration;
// use App\Models\User;
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

    public function edit(Administration $teacherAdministration)
    {
        $teacherAdministration->load('teachers', 'classrooms');

        // dd($teacherAdministration);

        return view('admin.teacherAdministrations.edit', compact('teacherAdministration'));
    }

    public function update(UpdateAdministrationRequest $request, Administration $teacherAdministration)
    {
        $teacherAdministration->update($request->all());

        dd($teacherAdministration);
    }

    public function destroy(TeacherAdministration $teacherAdministration)
    {
        //
    }
}
