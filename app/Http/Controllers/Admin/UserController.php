<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Classroom;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with(['classrooms', 'role', 'subjects'])->orderBy('name', 'asc')->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');

        $classrooms = Classroom::all()->pluck('name_class', 'id');

        return view('admin.users.create', compact('roles', 'classrooms' ));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        dd($user);
    }

    public function show(User $user)
    {
        $user->load('subjects', 'teacherMajor');

        return view('admin.users.show', compact('user'));
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
        
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
