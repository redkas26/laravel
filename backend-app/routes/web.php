<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redController;

// -------------------controller ----------------

Route::get('/redkas/index', [redController::class, 'index']);
Route::get('/redkas/show', [redController::class, 'show']);
Route::get('/redkas/edit', [redController::class, 'edit']);
Route::get('/redkas/create', [redController::class, 'create']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function(){
//     return "redkas is here";
// });

// // Route::view('/users', 'users');

// Route::view('/users', 'users', ['name' => 'redkas']);

// Route::get('/users/{id}', function ($id) {
//     return 'User '.$id;
// });

Route::get('/create/user', function() {
    return view('users.create')
        ->with('name1','yani')
        ->with('name2','essa');
});
