@extends('templates.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/teacher.css')}}">
@endsection
@section('content')
<ul class="teacher-list">
    <li class="teacher-item">
        <header>
            <a  target="tab" href="#"><img src="{{$photo}}" alt="Erik Jhonatta" /></a>
            <div class="teacher-info">
                <strong>{{$name}}</strong>{{--nome!--}}
                <span>{{$area}} - <a href="mailto:{{$email}}">{{$email}}</a></span>{{--área!--}}
                <p>
                    {{$info}}
                </p>
            </div>
        </header>
        <div class="teacher-links">
            <a target="_blank" href="#">Site do Professor</a>
            <a target="_blank" href="{{$lattes}}">Acessar Lattes</a>
        </div>
    </li>
</ul>
@endsection
