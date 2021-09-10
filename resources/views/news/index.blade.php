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
            <a href="{{route('news.show',['id'=>$news->title])}}"><img src="{{$news->photo}}" alt="{{$news->title}}" width="54px" height="54px"/></a>
        </div>
        <div class="news-info">
            <div id="title" onclick="localtion.href='{{route('news.show',['id'=>$news->title])}}'">
                <a href="{{route('news.show',['id'=>$news->title])}}"><strong>{{$news->title}}</strong></a>
            </div>
            <div id="date">
                <span>{{$news->date}}</span>
            </div>
            <div id="description">
                <p>{{strip_tags($news->description)}}</p>
            </div>

        </div>
            {{-- <a  target="tab" href="{{$news->lattes}}">Acessar Lattes</a> --}}

    </li>
    @endforeach
</ul>
<div class="pagination">{{$data->links('pagination::bootstrap-4')}}</div>
@endsection
