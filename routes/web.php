<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\MajorController;
// use App\Http\Controllers\Admin\ClassroomController;
// use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SubjectController as AdminSubject;
use App\Http\Controllers\Teachers\SubjectController as TeacherSubject;
use App\Http\Controllers\Student\LessonController as StudentSubject;
use App\Http\Livewire\Teacher\Subject;
// use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\UserController;

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

// Route::group([
//     'prefix'        => 'admin',
//     'as'            => 'admin',
//     // 'namespace'     => 'Admin'
// ], function(){
//     Route::get('/majors', Majors::class)->name('majors');
//     // Route::resources([
//     //     // '/'             => HomeController::class,
//     //     'classrooms'    => ClassroomController::class,
//     //     'users'         => UserController::class,
//     //     'subjects'      => SubjectController::class,
//     //     'roles'         => RoleController::class,
//     // ]);
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resources([
            'subjects' => StudentSubject::class,
        ]);
    });

   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resource('subjects', TeacherSubject::class);
   });

   Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('subjects', AdminSubject::class);
    // Route::get('/register', function () {
    //     return view('register');
    // })->name('register');
});

    // Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    //     Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    // });
});
