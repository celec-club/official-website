<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    
	public function home() {
		// show the template located in : resources/views/index.blade.php
		return view("index");
	}

}
