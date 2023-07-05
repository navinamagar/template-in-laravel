<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getHome()
        {
            return view('home');
        }
        public function getabout()
        {
            return view('about');
        }
    }