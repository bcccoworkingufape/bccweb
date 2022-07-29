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
        <div class="masterContainer">
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
        <div style="display:flex;justify-content: center;"class="container">
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #e5e4e5; padding:10px;border-radius: 9px; width:100%" >
                <div class="container menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                        <span class="navbar-toggler-icon" style="color: #black !important;"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar10">
                        <ul class="navbar-nav nav-fill w-100">
                            <li class="nav-item">
                                @if(Route::is('news.index'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="{{route('news.index')}}">Notícias</a>
                                @else
                                <a class="nav-link" href="{{route('news.index')}}">Notícias</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('course.index'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="{{route('course.index')}}">O Curso</a>

                                @else
                                <a class="nav-link" href="{{route('course.index')}}">O Curso</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('teachers.index'))
                                 <a style="font-weight:bold; color:black !important;"class="nav-link" href="{{route('teachers.index')}}">Professores</a>

                                @else
                                <a class="nav-link" href="{{route('teachers.index')}}">Professores</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('projects.index'))
                                <a style="font-weight:bold; color:black !important;" class="nav-link" href="{{route('projects.index')}}">Projetos</a>

                                @else
                                <a class="nav-link" href="{{route('projects.index')}}">Projetos</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('remote'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="/ensino-remoto"> Ensino Remoto</a>

                                @else
                                <a class="nav-link" href="/ensino-remoto">Ensino Remoto</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('documents'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="/documentos">Documentos</a>

                                @else
                                <a class="nav-link" href="/documentos">Documentos</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('media.index'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="{{route('media.index')}}">Mídia</a>

                                @else
                                <a class="nav-link" href="{{route('media.index')}}">Mídia</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('researchGroups.index'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="/grupos-de-pesquisa">Grupos de Pesquisa</a>

                                @else
                                <a class="nav-link" href="/grupos-de-pesquisa">Grupos de Pesquisa</a>

                                @endif
                            </li>
                            <li class="nav-item">
                                @if(Route::is('labs.index'))
                                <a style="font-weight:bold; color:black !important;"class="nav-link" href="{{route('labs.index')}}">Laboratórios</a>

                                @else
                                <a class="nav-link" href="{{route('labs.index')}}">Laboratórios</a>

                                @endif
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
                    <div class="container-content" style="min-height:600px; width: calc(100% - 18px);">
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
        </div>
        <!-- rodape -->
        <footer>
            <div class="row footer-container justify-content-center">
                <div class= "col-md-4" id="logo-ufape">
                    <img style="margin: 10px 0 10px 0"src="{{asset('img/logo-bcc-ufape.png')}}" alt="logo ufape" width="auto" height='80px' >
                </div>
                <div id="footer-center" class= "col-md-4">
                    <a href="http://bcccoworking.ufape.edu.br" target="_blank"><img id="coworkingimg"style="margin: 10px 0 10px 0"src="{{asset('img/Tag_BCC.png')}}" alt="logo coworking" width="auto" height='80px' ></a>
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
                        <a href="https://www.linkedin.com/company/coordena%C3%A7%C3%A3o-do-curso-de-ci%C3%AAncia-da-computa%C3%A7%C3%A3o-da-ufape/" target="tab"> <img src="{{asset('img/linkedin.png')}}" alt = "icone twitter" width="32px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
