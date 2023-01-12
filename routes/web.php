<?php

use App\Models\Story;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/bd', function () {
    $stories = Story::all();
    
    return view('bd', [
        'stories' => $stories
    ]);
});


Route::get('/users', function () {
    $users = User::paginate(10);
    return view('users', ['users' => $users]);
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/sexta-feira', function () {
    $users = User::all();    
    return view('sexta-feira', [
        'users' => $users
    ]);
});




Route::get('/home', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('homepage');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
