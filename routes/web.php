<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PersonalController;
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

Route::get('/',[CourseController::class,"index"]);

Route::get('/personal', [PersonalController::class, "personal"]);

Route::post("/enroll",[ApplicationController::class,"new_application"]);

Route::get("/admin",[AdminController::class,"index"]);

Route::get("/registration",[RegistrationController::class,"registration"]);
Route::post("/registration-valid",[RegistrationController::class,"signup_valid"]);

Route::get("/authorization",[AuthorizationController::class,"authorization"]);
Route::post("/authorization-valid",[AuthorizationController::class,"signin_valid"]);

Route::get("/application/{id_application}/confirm",[ApplicationController::class,"confirm"]);

Route::post("/course/create",[CourseController::class,"create"]);

Route::post("/category/create",[CategoryController::class,"create"]);