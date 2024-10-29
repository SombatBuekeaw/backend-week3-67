<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteCollection;
use App\Http\Controllers\UserController;
use Pest\Mutate\Mutators\String\UnwrapStrtolower;
use App\Http\Controllers\UserController as ControllersUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');
Route::view('login', 'admin.login');

Route::get('userHome',[UserController::class, 'userHome']);
Route::get('user.home/{name}',[UserController::class, 'userAbout']);
Route::get('admin.login',[UserController::class, 'userlogin']);