@extends('templates.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/teacher.css')}}">
@endsection
@section('content')
<ul class="teacher-list">
    <li class="teacher-item">
        <header>
            <a  target="tab" href="#"><img src="{{$data->photo}}" alt="{{$data->name}}" /></a>
            <div class="teacher-info">
                <strong>{{$data->name}}</strong>{{--nome!--}}
                <span>{{$data->area}} - <a href="mailto:{{$data->email}}">{{$data->email}}</a></span>{{--área!--}}
                <p>
                    {{$data->info}}
                </p>
            </div>
        </header>
        <div class="teacher-links">
            <a target="_blank" href="#">Site do Professor</a>
            <a target="_blank" href="{{$data->lattes}}">Acessar Lattes</a>
        </div>
    </li>
</ul>
@endsection
