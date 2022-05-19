<?php

namespace App\Http\Controllers\Teacher;

use App\Helpers\Method;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminstrationRequest;
use App\Models\Administration;
use App\Models\Classroom;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminstrationController extends Controller
{

    public function index()
    {
        $idTeacher = Auth::user()->id;

        $administrations = Administration::with(['subjects', 'classrooms'])
        ->where('teacher_id', $idTeacher)->paginate(5);

        // dd($administrations);
        return view('teacher.administrations.index', compact('administrations'));
    }

    public function create()
    {
        $idUser = Auth::user()->id;

        $subjects = Subject::where('teacher_id', $idUser)->pluck('name', 'id');

        $classrooms = Classroom::all( )->pluck('name_class', 'id');  

        return view('teacher.administrations.create', compact('classrooms', 'subjects'));
    }

    public function store(AdminstrationRequest $request)
    {
        $administration = Administration::create($request->all());

        // dd($administration);

        return redirect()->route('teacher.administrations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function show(Administration $administration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function edit(Administration $administration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administration $administration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administration $administration)
    {
        //
    }
}
