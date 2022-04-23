<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimeTable;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class TimeTableController extends Controller
{
    public function index()
    {
        // $weekDay = TimeTable::WEEK_DAY;

        $collectionTime = TimeTable::all();

        return view('admin.lessonTimetable.index', compact('timeTables'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(TimeTable $timeTable)
    {
        //
    }

    public function edit(TimeTable $timeTable)
    {
        //
    }

    public function update(Request $request, TimeTable $timeTable)
    {
        //
    }

    public function destroy(TimeTable $timeTable)
    {
        //
    }
}
