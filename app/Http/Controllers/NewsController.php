<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\ApiHandlers\CMSApiHandler;
class NewsController extends Controller
{

    private $client;

    public function __construct(){
        $this->client = new CMSApiHandler();
    }

    public function index(){
        $data = $this->client->getNoticias(true,10);
        return view('news.index',['data'=>$data]);
    }

    public function show($id){
        $data = $this->client->getNoticia($id);
        return view('news.show',['data'=>$data]);
    }


}
