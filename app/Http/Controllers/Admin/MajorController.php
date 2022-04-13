<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Classes;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::all();

        return view('admin.majors.index', compact('majors'));

        // dd($subjects);
    }

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store( StoreMajorRequest $request)
    {
        $major = Major::create($request->all());

        return redirect()->route('majors.index');
    }

    public function show(Major $major)
    {
        // return view('admin.major.show', compact('major'));
    }

    public function edit(Major $major)
    {
        return view('admin.majors.edit', compact('major'));
    }

    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->all());

        return redirect()->route('admin.majors.index');
    }

    public function destroy(Major $major)
    {

        // $major->delete();

        return back();
    }
}
