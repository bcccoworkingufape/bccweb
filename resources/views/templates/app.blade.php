<!doctype html>
<html lang="en">
    <head>
        <title>UFAPE - BCC</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/template.css')}}">
        @yield('head')
    </head>
    <body>
        <div class="container header">
            <div class="header-center">
                    <a class='subtitle' href="/" style="display: flex;flex-direction: column;align-items:center;margin:12px 0">
                        <img src="{{asset('img/logo-bcc.png')}}" alt="logo bcc" width="180" height="auto">
                        <span style="display:inline-block;font-size: 11px;font-weight: 900;color:black;">Bacharelado em Ciência da Computação</span>
                    </a>
            </div>
        </div>
        <!-- menu principal -->

        <!-- menu secundario -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #e5e4e5; padding:10px;border-radius: 9px" >
                <div class="container menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                        <span class="navbar-toggler-icon" style="color: #black !important;"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar10">
                        <ul class="navbar-nav nav-fill w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('news.index')}}">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('course.index')}}">O Curso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('teachers.index')}}">Professores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('projects.index')}}">Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ensino-remoto" style="color: #FF2323 !important"><strong> Ensino Remoto</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/documentos">Documentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('media.index')}}">Mídia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/grupos-de-pesquisa">Grupos de Pesquisa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('labs.index')}}">Laboratórios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <!-- conteudo -->
        <div class="container" style="margin-top: 2rem;">
            <div class="row ">
                @if(!Route::is('home'))
                    <div class="container-content" style="min-height:400px; width: calc(100% - 18px);">
                        @yield('content')
                    </div>
                @endif
                @if(Route::is('home'))
                    <div class="container-content">
                        @yield('content')
                    </div>
                @endif
                <!-- container eventos -->
                @yield('events')
            </div>


            <!-- Laboratorios-->
            <div class="row">
                @yield('labs')
            </div>
        </div>

        <!-- rodape -->
        <footer>
            <div class="row footer-container justify-content-center">
                <div class= "col-md-4" id="logo-ufape">
                    <img style="margin: 10px 0 10px 0"src="{{asset('img/bcc-Google-preto-2.png')}}" alt="logo ufape" width="auto" height='80px' >
                </div>
                <div id="footer-center" class= "col-md-4">
                    <p>Desenvolvido por BCC Coworking</p>
                </div>
                <div class= "col-md-4" id="logo-socials">
                    <div class="row justify-content-center" style="max-width: 275px; align-items: center;">
                        <div class="col-md-2" style="width: 152px;">
                            <a href = "https://facebook.com/bccufape/" target="tab"><img src="{{asset('img/logo_facebook_branco.png')}}" alt = "icone fb" width="32px"></a>
                        </div>
                        <div class="col-md-2">
                        <a href="https://instagram.com/bccufape/" target="tab"><img src="{{asset('img/logo_instagram_branco.png')}}" alt = "icone insta" width="32px"></a>
                        </div>
                        <div class="col-md-2">
                        <a href="#"> <img src="{{asset('img/logo_twitter_branco.png')}}" alt = "icone twitter" width="32px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
