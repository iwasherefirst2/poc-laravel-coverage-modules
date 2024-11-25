<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function(){
    return \Inertia\Inertia::render('Welcome');
});

Route::post('hi', function(\Illuminate\Http\Request $request){
    return redirect()->back()->withErrors(['may-be' => 'you-are-wrong']);
});
