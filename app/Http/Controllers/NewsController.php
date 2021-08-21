<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('news.index');//TODO pass all the teachers to this view when the backend is built
    }

    /*$id -> name of teacher */
    public function show($id){//TODO dependency injection with id number of BD when backend is built
        dd($id);
    }
}
