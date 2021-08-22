@extends('templates.app')
@section("head")
    <link rel="stylesheet" href="{{asset('css/research-groups.css')}}">
@endsection

@section("content")
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">GRUPOS DE PESQUISA</div>

<ul class="groups-list">
    <li class="groups-item">
        <header>
            <a  target="tab"  href="#"><img src="img/logo_lmts.png" alt="foto" /></a>
            <div class="groups-info">
                <a  target="tab" href="#"><strong>LMTS</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="#">Conhecer o Grupo</a>
    </li>

    <li class="groups-item">
        <header>
            <a  target="tab"  href="#"><img src="img/logo_lmts.png" alt="foto" /></a>
            <div class="groups-info">
                <a  target="tab" href="#"><strong>LMTS</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="#">Conhecer o Grupo</a>
    </li>

    <li class="groups-item">
        <header>
            <a  target="tab"  href="#"><img src="img/logo_lmts.png" alt="foto" /></a>
            <div class="groups-info">
                <a  target="tab" href="#"><strong>LMTS</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="#">Conhecer o Grupo</a>
    </li>

    <li class="groups-item">
        <header>
            <a  target="tab"  href="#"><img src="img/logo_lmts.png" alt="foto" /></a>
            <div class="groups-info">
                <a  target="tab" href="#"><strong>LMTS</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="#">Conhecer o Grupo</a>
    </li>
</ul>
@endsection
