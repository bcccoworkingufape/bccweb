<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemoteClassesController extends Controller
{
    public function index(){
        return view("remote-classes");
    }
}
