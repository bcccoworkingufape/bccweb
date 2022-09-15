@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/news.css')}}">

@endsection
@section('content')
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">NOTÍCIAS</div>

<ul class="news-list">
    @foreach ($data as $news)
    <li class="news-item">
        <div class="img-container">
            <a href="{{route('news.show',['id'=>$news->id])}}"><img src="{{$news->img}}" alt="{{$news->titulo}}" width="54px" height="54px"/></a>
        </div>
        <div class="news-info">
            <div id="title" onclick="localtion.href='{{route('news.show',['id'=>$news->id])}}'">
                <a href="{{route('news.show',['id'=>$news->id])}}"><strong>{{$news->titulo}}</strong></a>
            </div>
            <div id="date">
                <span>{{date('d/m/Y H:i:s',strtotime((int)$news->created_at))}}</span>
            </div>
            <div id="description">
                <p>{{strip_tags($news->descricao)}}</p>
            </div>

        </div>

    </li>
    @endforeach
</ul>
<div class="pagination">{{$data->links('pagination::bootstrap-4')}}</div>
@endsection
