<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});



Route::resource('student', StudentsController::class);

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){

        Route::resource('admin', AdminController::class);
        
        // Route::get('/', function () {
        //     return view('admin.dashboard');
        // })->name('admin.dashboard');

        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

        // user role assign
        Route::get('role',[AdminController::class,'role'])->name('admin.role');
        Route::get('profile',[AdminController::class,'reviewstudents'])->name('admin.profile');
        Route::get('editrole/{user}',[AdminController::class,'editrole'])->name('edit.role');
        Route::post('updaterole/{user}',[AdminController::class,'updaterole'])->name('update.role');

        //status
        Route::get('status',[StudentsController::class,'status'])->name('student.status');

        Route::get('editstatus/{students}',[StudentsController::class,'editstatus'])->name('edit.role');

        Route::post('updatestatus/{students}',[StudentsController::class,'updatestatus'])->name('status.update');

        

        Route::resource('student', StudentsController::class);
        
       
       
});

// Agent Route
Route::group(['prefix'=>'agent', 'middleware'=>['isAgent','auth','PreventBackHistory']], function(){

    Route::resource('agents', AgentController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('index', [App\Http\Controllers\AgentController::class, 'index'])->name('agent.dashboard');

    Route::get('student', [App\Http\Controllers\AgentController::class, 'student'])->name('agent.student');

     Route::get('student/create', [App\Http\Controllers\AgentController::class, 'createstudent'])->name('agent.student.create');

     Route::post('student/store', [App\Http\Controllers\AgentController::class, 'stdstore'])->name('agent.student.store');

     Route::get('profile/{profile}/view',[StudentsController::class,'agent'])->name('agent.profile');

     Route::get('profile/{profile}/edit',[StudentsController::class,'agentEdit'])->name('agent.profile.edit');
     Route::post('profile/{profile}/update',[StudentsController::class,'studentUpdate'])->name('agent.student.update');

    // Route::resource('student', StudentsController::class);
    
    
});


Route::group(['prefix'=>'author', 'middleware'=>['isAuthor','auth','PreventBackHistory']], function(){

   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   Route::get('index', [App\Http\Controllers\AuthorController::class, 'index'])->name('author.dashboard');
   
   Route::get('student/create', [App\Http\Controllers\AuthorController::class, 'createstudent'])->name('author.student.create');

     Route::post('student/store', [App\Http\Controllers\AuthorController::class, 'stdstore'])->name('author.student.store');

     Route::get('profile/{profile}/view',[AuthorController::class,'authorProfile'])->name('author.profile');
    
});




