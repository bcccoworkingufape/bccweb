@extends("templates.app")
@section("head")
    <link rel="stylesheet" href="{{asset('css/labs.css')}}">
@endsection

@section("content")
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">LABORATÓRIOS</div>

<ul class="labs-list">

    <li class="labs-item">
        <header>
            <img src="img/lab13.png" alt="lab_13" /></a>
            <div class="labs-info">
                <strong>Laboratório 13</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Compartilhado para estudo e atividades individuais e em equipe
        </p>
    </li>

    <li class="labs-item">
        <header>
            <img src="img/labss.png" alt="labs" /></a>
            <div class="labs-info">
                <strong>Laboratórios do Curso</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Laboratórios 10, 11, 12, 21, 22 e 23 - Disponíveis para aulas e práticas pedagógicas no geral
        </p>
        <a  target="_blank" href="http://sistemas.ufape.edu.br/reserva/">Solicitação de Agendamento</a>
    </li>

    <li class="labs-item">
        <header>
            <img src="img/lab24.png" alt="lab_24" /></a>
            <div class="labs-info">
                <strong>Laboratório de Pesquisa e Projetos</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Laboratório 24
        </p>
    </li>

    <li class="labs-item">
        <header>
            <img src="img/logo-uname.png" alt="logo_uname" /></a>
            <div class="labs-info">
                <strong>Uname Lab</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            UNAME is for Network, Availability, Modeling and Experiments
        </p>
    </li>

    <li class="labs-item">
        <header>
            <img src="img/logo_lmts.png" alt="logo_lmts" /></a>
            <div class="labs-info">
                <a  target="_blank" href="http://lmts.ufape.edu.br/"><strong>LMTS – Laboratório Multidisciplinar de Tecnologias Sociais</strong>{{--nome!--}}</a>
            </div>
        </header>
        <a href="http://lmts.ufape.edu.br/" target="_blank">http://lmts.ufape.edu.br/</a>
    </li>

    <li class="labs-item">
        <header>
            <img src="img/logo-bcccoworking-menor.jpeg" alt="logo_bcccoworking" />
            <div class="labs-info">
                <a  target="_blank" href="http://app.uag.ufrpe.br/bcccoworking/home"><strong>Laboratório de Pesquisa e Desenvolvimento – BCC Coworking</strong>{{--nome!--}}</a>
            </div>
        </header>
        <a  target="_blank" href="http://app.uag.ufrpe.br/bcccoworking/">http://app.uag.ufrpe.br/bcccoworking/</a>
    </li>
@endsection
