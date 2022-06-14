<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Administration};
// use App\Models\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        $user->load('administrations', 'subjects');

        // dd($user);
        return view('admin.teacherAdministrations.show', compact('user'));
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
