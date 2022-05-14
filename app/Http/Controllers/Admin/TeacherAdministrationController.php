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
        $teacherAdministrations = Administration::all();

        // dd($teacherAdministrations);

        return view('admin.teacherAdministrations.index', compact('teacherAdministrations'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(TeacherAdministration $teacherAdministration)
    {
        // $teacherAdministrations = TeacherAdministration::with('teachers')->select('teacher_id', DB::raw('count(*) as total'))
        // ->groupBy('teacher_id')->get();

        // $methods = Method::Method_Learning;

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
