@extends('templates.app')
@section("head")
    <link rel="stylesheet" href="{{asset('css/research-groups.css')}}">
@endsection

@section("content")
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">GRUPOS DE PESQUISA</div>

<ul class="groups-list">
    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" /></a>
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/718774"><strong>BREACS – Brazilian Enterprise Architecture Studies</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Alixandre Thiago Ferreira de Santana
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/718774">Saiba mais</a>
    </li>

    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" /></a>
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/251103"><strong>DKD – Distributed Knowledge Development</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Rodrigo Gusmão de Carvalho Rocha
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/251103">Saiba mais</a>
    </li>

    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" /></a>
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/715413"><strong>LINC – Laboratório de Inteligência Computacional	</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Tiago Buarque Assunção de Carvalho
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/715413">Saiba mais</a>
    </li>

    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" />
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/176902"><strong>LINTED - Linguagem, Tecnologia e Educação</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Robson Santos de Oliveira
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/176902">Saiba mais</a>
    </li>

    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" />
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/712395"><strong>Núcleo de Estudos em Tecnologias da Informação</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Assuero Fonseca Ximenes
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/712395">Saiba mais</a>
    </li>

    <li class="groups-item">
        <header>
            <img src="img/logo_bcccoworking.png" alt="logo_bcc" />
            <div class="groups-info">
                <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/716273"><strong>UNAME Research Group</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Coordenador: Jean Carlos Teixeira de Araujo
        </p>
        <a  target="tab" href="http://dgp.cnpq.br/dgp/espelhogrupo/716273">Saiba mais</a>
    </li>
</ul>
@endsection
