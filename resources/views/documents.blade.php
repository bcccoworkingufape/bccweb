@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/documents.css')}}">
@endsection

@section('content')
<div class="documents">DOCUMENTOS</div>
    <div class="form-row documents-container">
        <div class="documents-container">
            <a style="width:230px; text-decoration: underline" href="http://ufape.edu.br/escolaridade" target="_blank">http://ufape.edu.br/escolaridade</a>
        </div>
        <div class="documents-container">
            <strong>Informações Gerais do Curso</strong>
            <ul>
                <li>Curso: Ciência da Computação</li>
                <li>Modalidade: Bacharelado</li>
                <li>Carga horária: 3.200 (três mil e duzentas) horas</li>
                    <ul>
                        <li>Estágio Supervisionado Obrigatório ESO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300 horas</li>
                        <li>Trabalho de Conclusão de Curso TCC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;180 horas</li>
                        <li>Atividades Complementares ACC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;320 horas</li>
                    </ul>
                <li>Horário: Funcionamento Predominantemente Noturno</li>
            </ul>
        </div>
        <div class="documents-container">
            <strong>Anexos</strong>
            <ul>
            @foreach($data as $doc)
                <li><a href="{{$doc->path}}" target="_blank">{{$doc->titulo}}</a></li>
            @endforeach
            </ul>

        </div>
    </div>
@endsection
