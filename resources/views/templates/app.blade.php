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
            <div class="header-first">
                    <a class="nav-link" href="#">Sobre</a>
                    <a class="nav-link" href="#">Curso</a>
            </div>

            <div class="header-center">
                    <a href="/">
                        <img src="{{asset('img/logo_bcccoworking-2.png')}}" alt="logo bcc" width="auto" height="130px">
                    </a>
            </div>

            <div class="header-last">
                    <a class="nav-link" href="#">Localizar</a>
                    <a class="nav-link" href="//codeply.com">Entrar</a>
            </div>

        </div>
        <!-- menu principal -->

        <!-- menu secundario -->
        <div class="container" style="margin-top: 15px;">
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #e5e4e5; padding:10px;border-radius: 9px" >
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                        <span class="navbar-toggler-icon" style="color: #848484 !important;"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar10">
                        <ul class="navbar-nav nav-fill w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Professores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Laboratórios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="//codeply.com">Ensino Remoto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/documentos">Documentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mídia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Grupos de Pesquisa</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <!-- conteudo -->
        <div class="container" style="margin-top: 2rem;">
            <div class="row ">
                <div class="container-content">
                    @yield('content')
                </div>

                <!-- container eventos -->
                <div class="container_importante" >
                    <div class="form-group">
                        <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">EVENTOS</div>
                    </div>
                    <div class="row">

                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                                    <div class="event-number">1º</div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                        <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                                    <div class="event-number">2º</div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                        <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                                    <div class="event-number">3º</div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                        <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                                    <div class="event-number">4º</div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                        <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                                    <div class="event-number">5º</div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                        <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>


            <!-- Laboratorios-->
            <div class="row">
                @yield('labs')
            </div>
        </div>

        <!-- rodape -->
        <footer>
            <div class="row footer-container justify-content-center">
                <div class= "col-md-4">
                    <img src="{{asset('img/bcc-Google-preto-2.png')}}" alt="logo bcc rodapé" width="auto" height="100px">
                </div>
                <div class= "col-md-4" id="logo-ufape">
                    <img src="{{asset('img/logo_ufape_branco.png')}}" alt="logo ufape" width="160px">
                </div>
                <div class= "col-md-4" id="logo-socials">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
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
