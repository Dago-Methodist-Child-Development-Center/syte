<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function welcome(){
    	return view('pages.welcome');
    }

    // public function Activities(){
    // 	return view('pages.Activities');
    // }

    public function gallery(){
    	return view('pages.gallery');
    }

    public function staff(){
    	return view('pages.staff');
    }

    public function login(){
    	return view('pages.login');
    }
}
