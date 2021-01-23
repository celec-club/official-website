<?php

// This is routes files : Request->routes->controller->view

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "home"]);
Route::get('/home', [HomeController::class, "home"]);
Route::get("/register", [RegisterController::class, "show"]);
Route::get("/formation", [FormationController::class, "show"]);
Route::get("/events", [EventController::class, "show"]);
Route::get("/courses", [CourseController::class, "show"]);
Route::get("/gallerie", [GalleryController::class, "show"]);

Route::group(['prefix' => 'admin'], function() {
	// this will be : admin/login
	Route::get("login", [AdminPanelController::class, "showLogin"]);
	Route::post("login", [AdminController::class, "auth"]);
	Route::middleware(["auth:admin"])->group(function() {
		Route::get("dashboard", [AdminPanelController::class, "showDashboard"]);
		Route::get("users/show", [UserController::class, "show"]);
		Route::get("messages/show", [MessagesController::class, "show"]);
		Route::get("formation/emails", [FormationController::class, "getForAdmin"]);
	});
});
