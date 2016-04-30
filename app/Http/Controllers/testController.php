<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Person\Person;

class testController extends Controller
{
    public function index()
    {
    	return User::with('person')->get();
    }

    public function dashboard()
    {
    	return view('dashboard');
    }
}
