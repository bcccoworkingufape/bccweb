@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/news-show.css')}}">

@endsection
@section('content')
<div id="title">
    <h2>{{$data->title}}</h2>
</div>
<div id="date">
    <span>{{$data->date}}</span>
</div>
<div id="description">
    <p>
        {!! $data->description !!}
    </p>
</div>
@endsection
