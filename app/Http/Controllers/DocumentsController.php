<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\ApiHandlers\CMSApiHandler;


class DocumentsController extends Controller
{
    public function __construct(){
        $this->client = new CMSApiHandler();
    }

    public function index(){
        $data = $this->client->getDocumentos();
        return view('documents',['data'=>$data]);
    }
}
