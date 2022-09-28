<?php

use App\Http\Controllers\Admin\AdministrationCommentControoler;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\SubjectController as AdminSubject;
use App\Http\Controllers\Admin\CalenderController as TimeTableSubject;
use App\Http\Controllers\Admin\{
    MajorController, 
    TeacherController, 
    ClassroomController,
    RoleController,
    TeacherAdministrationController, 
    UserController, 
    ScheduleController,
    SettingUserConstroller,
    // AttendanceController
};
use App\Http\Controllers\Teacher\SubjectController as TeacherSubject;
use App\Http\Controllers\Teacher\SchedulesController as TeacherShedule;
use App\Http\Controllers\Teacher\TeacherAdministrationController as TeacherAdministration;
use App\Http\Controllers\Teacher\AttendanceStudentController;
// use App\Http\Controllers\Teacher\AdminstrationController;
use App\Http\Controllers\Student\LessonController as StudentSubject;
use App\Http\Controllers\Student\SubjectStudentController as SubjectController;
use App\Http\Controllers\Student\AttendanceController;
use App\Http\Livewire\Teacher\Subject;
use App\Models\LessonTimetable;

// using livewire
use App\Http\Livewire\Major;
use App\Http\Livewire\Major\Major as MajorMajor;
use App\Http\Livewire\Member;
use App\Http\Livewire\Role;

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
// Route::redirect('register', '/register');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    
    Route::get('member', Member::class)->name('member');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

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
            'attendanceStudent'         => AttendanceStudentController::class,
        ]);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {

        Route::get('role', Role::class)->name('role');
        Route::get('member', Member::class)->name('member');
        Route::resources([
            'subjects'                  => AdminSubject::class,
            'schedules'                 => ScheduleController::class,
            'settingUser'               => SettingUserConstroller::class,
            'majors'                    => MajorController::class,
            'teachers'                  => TeacherController::class,
            'classrooms'                => ClassroomController::class,
            'teacherAdministrations'    => TeacherAdministrationController::class,
            'users'                     => UserController::class,
            'roles'                     => RoleController::class,
            // 'members'                   => Member::class,
            // 'administrationComment'     => AdministrationCommentControoler::class,
        ]);
    });

});
