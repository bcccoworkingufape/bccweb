@extends('templates.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">NOTÍCIAS</div>

                    <div class="form-row">
                        <div class="style_card_destaque_principal">
                            <div class="" style="margin: 5px;">
                                <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 25px;">
                                        <img class="card-img-top" src="img/img_destaque_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;">
                                    <div class="container" style="padding-top: 10px;;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    {{-- <div class="col-md-12" style="margin-top:10px;margin-bottom: 10px;">
                                                        <span style="background-color: #FF0000; padding: 2px;padding-bottom: 5px; padding-left: 10px; padding-right: 11px; border-radius: 12px; color: #fFF;font-weight: 600;box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                        -webkit-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                        -moz-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);">Evento</span>
                                                    </div> --}}
                                                    <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                                        Curso Online - Programação Web
                                                    </div>
                                                    <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s...
                                                    </div>
                                                    <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">
                                                        <img src="img/icone_calendario.png" alt="" width="17px" style="margin-top: -4px; margin-right: 3px;">
                                                        <span>10/04/2021 - 10h00</span>
                                                    </div>
                                                    <div class="col-md-12"><hr style="margin-top: -6px; margin-bottom: -6px;"></div>
                                                    <div class="col-md-12">Imagem/Nome do professor</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="style_card_destaque_principal">
                            <div class="" style="margin: 5px;">
                                <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 25px;">
                                        <img class="card-img-top" src="img/img_destaque_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;">
                                    <div class="container" style="padding-top: 10px;;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    {{-- <div class="col-md-12" style="margin-top:10px;margin-bottom: 10px;">
                                                        <span style="background-color: #FF0000; padding: 2px;padding-bottom: 5px; padding-left: 10px; padding-right: 11px; border-radius: 12px; color: #fFF;font-weight: 600;box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                        -webkit-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                        -moz-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);">Evento</span>
                                                    </div> --}}
                                                    <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                                        Curso Online - Programação Web
                                                    </div>
                                                    <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s...
                                                    </div>
                                                    <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">
                                                        <img src="img/icone_calendario.png" alt="" width="17px" style="margin-top: -4px; margin-right: 3px;">
                                                        <span>10/04/2021 - 10h00</span>
                                                    </div>
                                                    <div class="col-md-12"><hr style="margin-top: -6px; margin-bottom: -6px;"></div>
                                                    <div class="col-md-12">Imagem/Nome do professor</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('events')
<div class="container_importante" >
    <div class="form-group">
        <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">EVENTOS</div>
    </div>
    <div class="row">

            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                    <div class="event-number">1º</div>
                    <div class="form-group" style="margin-top: 10px;">
                        <div class="textDiv" style="font-weight: 600; color: #1492E6;">Aula inaugural e Início do semestre letivo de 2020.2</div>
                        <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">30/08/2021</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                    <div class="event-number">2º</div>
                    <div class="form-group" style="margin-top: 10px;">
                        <div class="textDiv" style="font-weight: 600; color: #1492E6;">Reajuste de matrícula.</div>
                        <div class="textDiv"style="font-size: 12px;width: 95%;color: #707070;">13-15/09/2021 - Deverá ser impresso ou anotado o protocolo do requerimento de matrícula, emitido pelo sig@/sigaa, para eventual comprovação 18 Último dia para cadastramento do seguro de estágio a ser realizado em outubro (www.preg.ufrpe.br/cge) </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                    <div class="event-number">3º</div>
                    <div class="form-group" style="margin-top: 10px;">
                        <div class="textDiv" style="font-weight: 600; color: #1492E6;">Colação de Grau Unificada 2020.1</div>
                        <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">29/09/2021</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px;">
                <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                    <div class="event-number">4º</div>
                    <div class="form-group" style="margin-top: 10px;">
                        <div class="textDiv" style="font-weight: 600; color: #1492E6;">Cancelamento de disciplinas com ônus e trancamento de matrícula via sig@/sigaa</div>
                        <div class="textDiv" style="font-size: 12px;width: 95%;color: #707070;">04-08/10/2021</div>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
@section('labs')
<div class="container_labs">
    <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;">Laboratórios de Tecnologia</div>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 10px;">
            <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                <div style=" margin-right: 10px;">
                    <img class="card-img-top" src="img/logo_bcccoworking.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;">
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;"><a href="http://app.uag.ufrpe.br/bcccoworking/home"> BCC Coworking</a></div>
                    <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;"><a href="http://app.uag.ufrpe.br/bcccoworking/home"> Laboratório de Pesquisa, Desenvolvimento & Inovação</a></div>
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
@endsection
