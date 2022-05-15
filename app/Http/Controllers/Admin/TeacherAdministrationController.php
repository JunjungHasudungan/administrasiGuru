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

        return view('admin.teacherAdministrations.index', compact('teacherAdministrations'));
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
        
        $teacher = Administration::find($administration)->get('id');
        // $teacher =  $administration->method;
        // $teacher = Administration::where('user_id', $administration)->get();
        dd($administration);
        return view('admin.teacherAdministrations.show', compact('user_id'));
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
