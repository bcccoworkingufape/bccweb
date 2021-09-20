@extends('templates.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/teachers.css')}}">
@endsection
@section('content')
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">PROFESSORES</div>

<ul class="teacher-list">
    @foreach ($data as $teacher)
    <li class="teacher-item">
        <header>
            <img src="{{$teacher->photo}}" alt="{{$teacher->name}}" />
            <div class="teacher-info">
                <strong>{{$teacher->name}}</strong>
                <span>{{$teacher->area}}</span>{{--área!--}}
            </div>
        </header>
        <p>
            {{$teacher->info}}
        </p>
        <a id="lattes" target="tab" href="{{$teacher->lattes}}">{{$teacher->lattes}}</a>
    </li>
    @endforeach
</ul>
<div class="pagination">{{$data->links('pagination::bootstrap-4')}}</div>
@endsection
