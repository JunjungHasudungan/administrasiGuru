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
        $administrations = User::with('administrations')->where('role_id', 3)
        ->orderBy('name', 'asc')->paginate(5);
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

    public function show(Administration $administration)
    {
        $tes = Administration::find($administration);
        // $teacherAdministration = Administration::where('adminis$administration', $administration)->get();
       dd($tes);
        $administration->load('administrations', 'subjects');

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
