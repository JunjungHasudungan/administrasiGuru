<?php

use App\Http\Controllers\Admin\AdministrationCommentControoler;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\SubjectController as AdminSubject;
use App\Http\Controllers\Admin\CalenderController as TimeTableSubject;
use App\Http\Controllers\Admin\{
    MajorController, 
    TeacherController, 
    ClassroomController, 
    TeacherAdministrationController, 
    UserController, 
    AttendanceController
};
// use App\Http\Controllers\Admin\TeacherController;
// use App\Http\Controllers\Admin\ClassroomController;
// use App\Http\Controllers\Admin\TeacherAdministrationController;
// use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Student\AttendanceController;
use App\Http\Controllers\Teacher\SubjectController as TeacherSubject;
use App\Http\Controllers\Teacher\SchedulesController as TeacherShedule;
use App\Http\Controllers\Teacher\TeacherAdministrationController as TeacherAdministration;
use App\Http\Controllers\Teacher\AttendanceController as AttendaceStudent;
// use App\Http\Controllers\Teacher\AdminstrationController;
use App\Http\Controllers\Student\LessonController as StudentSubject;
use App\Http\Controllers\Student\SubjectStudentController as SubjectController;
use App\Http\Livewire\Teacher\Subject;
use App\Models\LessonTimetable;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resources([
            'subjects' => SubjectController::class,
            'attendances' => AttendanceController::class,

        ]);
    });

   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resources([
           'subjects'                   => TeacherSubject::class,
           'schedules'                  => TeacherShedule::class,
           'administrations'            => \App\Http\Controllers\Teacher\AdminstrationController::class,
           'attendanceStudent'         => AttendaceStudent::class,
        ]);
   });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resources([
            'subjects'                  => AdminSubject::class,
            'schedules'                 => TimeTableSubject::class,
            'majors'                    => MajorController::class,
            'teachers'                  => TeacherController::class,
            'classrooms'                => ClassroomController::class,
            'teacherAdministrations'    => TeacherAdministrationController::class,
            'users'                     => UserController::class,
            // 'administrationComment'     => AdministrationCommentControoler::class,
        ]);
    });

});
