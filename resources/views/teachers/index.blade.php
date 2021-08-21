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
            <a  target="tab"  href="{{route('teachers.show',['id'=>$teacher->name])}}"><img src="{{$teacher->photo}}" alt="{{$teacher->name}}" /></a>
            <div class="teacher-info">
                <a  target="tab" href="{{route('teachers.show',['id'=>$teacher->name])}}"><strong>{{$teacher->name}}</strong>{{--nome!--}}</a>
                <span>{{$teacher->area}}</span>{{--área!--}}
            </div>
        </header>
        <p>
            {{$teacher->info}}
        </p>
        <a  target="tab" href="{{$teacher->lattes}}">Acessar Lattes</a>
    </li>
    @endforeach
</ul>
<div class="pagination">{{$data->links('pagination::bootstrap-4')}}</div>
@endsection
