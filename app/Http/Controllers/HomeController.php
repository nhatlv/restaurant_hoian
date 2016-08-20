<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use View;
use DB;
use Config;

class HomeController extends Controller
{
    public function load($language)
    {
        return View::make('home', array('constants' => ''));
    }
}
