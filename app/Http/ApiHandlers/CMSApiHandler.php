<?php
namespace App\Http\ApiHandlers;

use GuzzleHttp\Client;


class CMSApiHandler{

    private $client;

    public function __construct(){
        $this->client = new Client(['verify'=>false,"base_uri"=>env("CMS_URL")]);
    }



    public function getNoticias($paginate,$pages = 4){
        $response = $this->client->request("GET","noticias");
        $data = json_decode($response->getBody()->getContents());
        if($paginate){
            $data = $this->paginate($data,$pages);
        }
        return $data;
    }

    public function getNoticia($id){
        $response = $this->client->request("GET","noticias/".$id);
        $data = json_decode($response->getBody()->getContents());
        return $data;
    }

    public function getDocumentos(){
        $response = $this->client->request("GET","documentos");
        $data = json_decode($response->getBody()->getContents());
        return $data;
    }

    public function getEventos(){
        $response = $this->client->request("GET","eventos");
        $data = json_decode($response->getBody()->getContents());
        return $data;
    }

    public function paginate($items, $perPage = 15, $page = null, $getValues = true)
    {
        $pageName = 'page';
        $page     = $page ?: (\Illuminate\Pagination\Paginator::resolveCurrentPage($pageName) ?: 1);
        $items    = $items instanceof \Illuminate\Support\Collection ? $items : \Illuminate\Support\Collection::make($items);

        return new \Illuminate\Pagination\LengthAwarePaginator(
            $getValues
            ? $items->forPage($page, $perPage)->values()
                : $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            [
                'path'     => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }
}
