<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function dashboard(){
		return view('home');
	}
	
    public function Addstudents(){
    	return view('addstudent');
    }

    public function Allstudents(){
    	return view('allstudent');
    }
}
