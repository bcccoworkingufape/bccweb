<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabsController extends Controller
{
    public function index(){
        return view("labs.index");
    }

    public function show(){
        return view("labs.show");
    }

}
