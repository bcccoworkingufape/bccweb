@extends("templates.app")
@section("head")
    <link rel="stylesheet" href="{{asset('css/labs.css')}}">
@endsection

@section("content")
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">LABORATÓRIOS</div>

<ul class="labs-list">
    <li class="labs-item">
        <header>
            <a  target="tab"  href="http://lmts.ufape.edu.br/"><img src="img/logo_lmts.png" alt="foto" /></a>
            <div class="labs-info">
                <a  target="tab" href="#"><strong>LMTS</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="http://lmts.ufape.edu.br/">Conhecer o Grupo</a>
    </li>

    <li class="labs-item">
        <header>
            <a  target="tab"  href="http://app.uag.ufrpe.br/bcccoworking/home"><img src="img/logo_bcccoworking.png" alt="foto" /></a>
            <div class="labs-info">
                <a  target="tab" href="http://app.uag.ufrpe.br/bcccoworking/home"><strong>BCC Coworking</strong>{{--nome!--}}</a>
            </div>
        </header>
        <p>
            Informações sobre o grupo
        </p>
        <a  target="tab" href="#">Conhecer o Grupo</a>
    </li>
@endsection
