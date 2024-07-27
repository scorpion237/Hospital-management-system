<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointementController extends Controller
{
    public function index(){
        return view('appointements.index');
    }

    public function create(){
        return view('appointements.create');
    }
}
