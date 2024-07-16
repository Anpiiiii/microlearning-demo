<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ModuleDataController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ProgressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories/list', 'index');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/courses/list', 'index');
    Route::get('/get-courses/{category}', 'getCoureseByCategory');
    Route::get('/my-courses/{user}', 'myCourses');
});

Route::controller(ModuleController::class)->group(function () {
    Route::get('/modules/list/{course}', 'index');
});

Route::controller(QuestionController::class)->group(function () {
    Route::get('/questions/list/{course}', 'index');
});

Route::controller(ModuleDataController::class)->group(function () {
    Route::get('/module-data/list/{module}', 'index');
});

Route::controller(PurchaseController::class)->group(function () {
    Route::post('/purchase', 'store');
});

Route::controller(ProgressController::class)->group(function () {
    Route::post('/progress-done', 'store');
    Route::get('/progress/{user}', 'myProgress');
});
