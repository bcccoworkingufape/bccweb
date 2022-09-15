@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/news-show.css')}}">

@endsection
@section('content')
<div id="title">
    <h2>{{$data->titulo}}</h2>
</div>
<div id="date">
    <span>{{date('d/m/Y H:i:s',strtotime((int)$data->created_at))}}</span>
</div>
<div id="description">
    <p>
        {!! $data->descricao !!}
    </p>
</div>
@endsection
