<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role_id', 3)->with('subjects')->orderBy('name', 'asc')->get();


        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        $user->load('subjects');

        dd($user);

        return view('admin.teachers.show', compact('user'));
    }

    public function edit($id)
    {
        return view('admin.teachers.edit');
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
