<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
		$name='Stefano';
		return view('welcome.welcome')->with('name',$name);
	}
	
	
    public function indexprova(){
		$name='Stefano';
		return view('welcome.welcome2')->with('name',$name);
	}
	//return view('welcome.hello')->with(['name'})
}

