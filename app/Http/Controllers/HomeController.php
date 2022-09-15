<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ApiHandlers\CMSApiHandler;

class HomeController extends Controller
{

    public function __construct(){
        $this->client = new CMSApiHandler();
    }

    public function index(){
        $data = $this->client->getNoticias(true, 4);
        $eventos = $this->client->getEventos();
        return view('home',['data'=>$data,'eventos'=>$eventos]);
    }
}
