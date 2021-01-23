<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller {
    public function show() {
    	return view("formation");
    }

    public function getForAdmin() {
    	return view("admin.formation.emails");
    }
}
