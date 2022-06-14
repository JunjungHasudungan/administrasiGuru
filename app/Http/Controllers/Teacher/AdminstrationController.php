<?php

namespace App\Http\Controllers\Teacher;

use App\Helpers\Method;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminstrationRequest;
use App\Models\{Administration, Classroom, Subject};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminstrationController extends Controller
{

    public function index()
    {
        $idTeacher = Auth::user()->id;

        $administrations = Administration::with(['subjects', 'classrooms'])
        ->where('teacher_id', $idTeacher)->latest()->paginate(5);

        // dd($administrations);
        return view('teacher.administrations.index', compact('administrations'));
    }

    public function create()
    {
        $idUser = Auth::user()->id;

        $subjects = Subject::where('teacher_id', $idUser)->pluck('name', 'id');

        $classrooms = Classroom::all( )->pluck('name_class', 'id');  

        return view('teacher.administrations.create', compact('classrooms', 'subjects', 'idUser'));
    }

    public function store(AdminstrationRequest $request)
    {
        $administration = Administration::create($request->all());

        // dd($administration);

        return redirect()->route('teacher.administrations.index');
    }

    public function show(Administration $administration)
    {
        $administration->load('teachers', 'classrooms');
        
        return view('teacher.administrations.show', compact('administration'));
    }

    public function edit(Administration $administration)
    {
        //
    }

    public function update(Request $request, Administration $administration)
    {
        //
    }

    public function destroy(Administration $administration)
    {
        //
    }
}
