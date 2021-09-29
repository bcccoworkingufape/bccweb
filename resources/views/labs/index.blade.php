@extends("templates.app")
@section("head")
    <link rel="stylesheet" href="{{asset('css/labs.css')}}">
@endsection

@section("content")
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">LABORATÓRIOS</div>

<ul class="labs-list">

    <li class="labs-item">
        <header>
            <div class="labs-info">
                <a href="/laboratorios-bcc" target="_blank"><strong>Laboratório de Estudo (Laboratório 13)</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <a href="/laboratorios-bcc" target="_blank"><img src="img/lab13.png" alt="lab_13" /></a>
            Compartilhado para estudo e atividades individuais e em equipe
        </p>
    </li>

    <li class="labs-item">
        <header>
            <div class="labs-info">
                <a href="/laboratorios-bcc" target="_blank"><strong>Laboratórios de Aulas Práticas (Laboratórios 10, 11, 12, 21, 22 e 23)</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <a href="/laboratorios-bcc" target="_blank"><img src="img/labss.png" alt="labs" /></a>
            Disponíveis para aulas e práticas pedagógicas no geral
        </p>
    </li>

    <li class="labs-item">
        <header>
            <div class="labs-info">
                <a href="/laboratorios-bcc" target="_blank"><strong>Laboratório de Pesquisa e Projetos (Laboratório 24)</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <a href="/laboratorios-bcc" target="_blank"><img src="img/lab24.png" alt="lab_24" /></a>
            Compartilhado para Projetos de Pesquisa e Desenvolvimento
        </p>
    </li>

    <li class="labs-item">
        <header>

            <div class="labs-info">
                <strong>Uname Lab</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <img src="img/logo-uname.png" alt="logo_uname" /></a>UNAME is for Network, Availability, Modeling and Experiments
        </p>
    </li>

    <li class="labs-item">
        <header>

            <div class="labs-info">
                <a  target="_blank" href="http://lmts.ufape.edu.br/"><strong>LMTS – Laboratório Multidisciplinar de Tecnologias Sociais</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <a href="http://lmts.ufape.edu.br/" target="_blank"><img src="img/logo_lmts_2.png" alt="logo_lmts" /></a>
        </p>

    </li>

    <li class="labs-item">
        <header>
            <div class="labs-info">
                <a  target="_blank" href="http://app.uag.ufrpe.br/bcccoworking/home"><strong>Laboratório de Pesquisa e Desenvolvimento – BCC Coworking</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            <a  target="_blank" href="http://app.uag.ufrpe.br/bcccoworking/"> <img src="img/logo-bcccoworking-menor.jpeg" alt="logo_bcccoworking" /></a>
        </p>

    </li>
@endsection
