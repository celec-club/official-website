<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller {
    public function show() {
    	$messages = Message::orderByDesc("created_at")->paginate(1);
    	$users = User::count();
    	return view("admin.messages.show", ["messages" => $messages, "users" => $users]);
    }
}
