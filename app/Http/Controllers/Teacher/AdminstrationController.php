<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminstrationRequest;
use App\Models\Administration;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminstrationController extends Controller
{
    public function index()
    {
        $administrations = Administration::all();

        return view('teacher.administrations.index', compact('administrations'));
    }

    public function create()
    {
        $classrooms = Classroom::all()->pluck('name_class', 'id');

        return view('teacher.administrations.create', compact('classrooms'));
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
