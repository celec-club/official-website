<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function show() {
    	$users = User::count();
    	return view("admin.users.show", ["acceptedCount" => User::where("activated", 1)->count(), "count" => $users]);
    }
}
