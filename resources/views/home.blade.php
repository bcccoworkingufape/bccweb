@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">NOTÍCIAS</div>

<div class="form-row">
    @foreach($data as $news)
    @if($loop->index < 4) <div class="style_card_destaque_principal">
        <div class="" style="margin: 5px;position:relative;">
            <div class="newscont" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 25px;position:relative;">
                <a href="{{route('news.show',['id'=>$news->title])}}"><img style="max-height:215px;object-fit: fill;" class="card-img-top" src="{{$news->photo}}" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"></a>
                <div class="container" style="padding-top: 10px;;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="title col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 20px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                    <a style="color:black;" href="{{route('news.show',['id'=>$news->title])}}">{{$news->title}}</a>
                                </div>
                                <div class="desc col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">
                                    {!! $news->description !!}
                                </div>
                                <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px; position:absolute;bottom:-50px;">
                                    <img src="img/icone_calendario.png" alt="" width="17px" style="margin-top: -4px; margin-right: 3px;">
                                    <span>{{$news->date}}</span>
                                </div>
                                <div class="col-md-12">
                                    <hr style="position:relative; bottom:-15px; margin-top: -6px; margin-bottom: -6px;">
                                </div>
                                <!-- <div class="col-md-12">Imagem/Nome do professor</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endif
@endforeach
</div>
@endsection
@section('events')
<div class="container_importante" style="display:flex; flex-direction:column;">
    <div class="form-group">
        <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">EVENTOS</div>
    </div>
    <div class="row" style="height: calc(49%);">
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                <div class="event-number">1º</div>
                <div class="form-group" style="margin-top: 10px;">
                    <div class="textDiv" style="font-weight: 600; color: #1492E6;">Colação de Grau 2021.1</div>
                    <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">17/08/2022</div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                <div class="event-number">2º</div>
                <div class="form-group" style="margin-top: 10px;">
                    <div class="textDiv" style="font-weight: 600; color: #1492E6;">Início Semestre Letivo e Aula Magna</div>
                    <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">14/02/2022 e 24/02/2022</div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                <div class="event-number">3º</div>
                <div class="form-group" style="margin-top: 10px;">
                    <div class="textDiv" style="font-weight: 600; color: #1492E6;">Matrícula dos Alunos Regulares</div>
                    <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">26-28/01/2022</div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                <div class="event-number">4º</div>
                <div class="form-group" style="margin-top: 10px;">
                    <div class="textDiv" style="font-weight: 600; color: #1492E6;">Reajuste de Matrícula</div>
                    <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">21-23/02/2022</div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                <div class="event-number">5º</div>
                <div class="form-group" style="margin-top: 10px;">
                    <div class="textDiv" style="font-weight: 600; color: #1492E6;">Evento IntegraBCC</div>
                    <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">14-18/02/2022</div>
                </div>
            </div>
        </div>

    </div>
    <div class="container_labs">
    <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">Laboratórios de Tecnologia</div>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                <div style=" margin-right: 10px;">
                    <img class="card-img-top" src="img/logo_bcccoworking.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;">
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;"><a href="http://bcccoworking.ufape.edu.br/"> BCC Coworking</a></div>
                    <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;"><a href="http://bcccoworking.ufape.edu.br/"> Laboratório de Pesquisa, Desenvolvimento & Inovação</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                <div style=" margin-right: 10px;">
                    <img class="card-img-top" src="img/logo_lmts.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;">
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;"><a href="http://lmts.ufape.edu.br">LMTS</a></div>
                    <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;"><a href="http://lmts.ufape.edu.br">Laboratório Multidisciplinar de Tecnologias Sociais</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('labs')

@endsection
