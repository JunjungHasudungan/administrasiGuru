<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalenderController extends Controller
{
    public function index()
    {
        $weekdays = Timetable::WEEK_DAY;
        // $weekdays = Timetable::all();

        // dd($weekdays);
        return view('admin.lessonTimetable.index', compact('weekdays'));
    }
}
