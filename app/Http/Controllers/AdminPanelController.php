<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPanelController extends Controller {
    public function showLogin() {
    	return view("admin.login");
    }

    public function showDashboard() {
    	$users = User::count();
    	$messages = Message::count();
    	return view("admin.dashboard", ["users" => $users, "messages" => $messages]);
    }
}
