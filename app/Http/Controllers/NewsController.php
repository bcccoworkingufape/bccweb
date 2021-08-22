<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    private $data = '{
        "noticia1":{
            "title":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        },
        "noticia2":{
            "title":"Título 2",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        },
        "noticia3":{
            "title":"Título 3",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        },
        "noticia4":{
            "title":"Título 4",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        },
        "noticia5":{
            "title":"Título 5",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        },
        "noticia6":{
            "title":"Título 6",
            "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend velit vel dapibus. Suspendisse eleifend ante eget varius elementum. Phasellus facilisis semper dolor, ac tincidunt sem dapibus id. Quisque eu arcu cursus, sagittis erat nec, lacinia odio. In rhoncus justo in elit tempor porttitor vitae in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis felis, tristique tempor nisl a, ornare tempus erat. Donec tincidunt malesuada rutrum. Proin molestie tellus et sodales rutrum. Nam rutrum ante odio, lacinia faucibus elit vestibulum vel. Donec id porta dolor, ac pellentesque arcu. Duis.",
            "photo":"https://previews.123rf.com/images/alhovik/alhovik1709/alhovik170900031/86481591-breaking-news-background-world-global-tv-news-banner-design.jpg",
            "date": "2021-08-1"
        }
    }';
    public function index(){
        $data = json_decode($this->data);
        $data = $this->paginate($data,4);
        return view('news.index',['data'=>$data]);
    }

    /*$id -> title of news */
    public function show($id){//TODO dependency injection with id number of BD when backend is built
        $testTitle = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget justo sed arcu rhoncus vehicula. Donec rutrum eleifend';
        $data = json_decode($this->data);
        if($id == $testTitle){
            return view('news.show',['data'=>$data->noticia1]);
        }else if($id == "Título 2"){
            return view('news.show',['data'=>$data->noticia2]);
        }else if($id == "Título 3"){
            return view('news.show',['data'=>$data->noticia3]);
        }else if($id == "Título 4"){
            return view('news.show',['data'=>$data->noticia4]);
        }else if($id == "Título 5"){
            return view('news.show',['data'=>$data->noticia5]);
        }else if($id == "Título 6"){
            return view('news.show',['data'=>$data->noticia6]);
        }
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
