<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function index()
    {

        $schedules = Shedule::with(['user', 'classroom', 'subject'])->get();
        // dd($schedules);
        return view('admin.schedules.index', ['schedules' => $schedules]);
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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
