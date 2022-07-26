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
                <li><strong>Resoluções</strong></li>
                <ul>
                    <li><a href="https://drive.google.com/file/d/13Pf_fm4AYWIM9wHvgd9uhl5MRJXBuMUE/view" target="_blank">Estágio Supervisionado Obrigatório (ESO)</li>
                    <li><a href="https://drive.google.com/file/d/1-tvDLr1QlhDOcBd3nODr1DAPuJItPlks/view" target="_blank">Trabalho de Conclusão do Curso (TCC)</a></li>
               </ul>
                <li><a href="https://drive.google.com/file/d/1ar9GSqJOTYUOHIMmEoDbPg_syhIbB53k/view" target="_blank">Projeto Pedagógico do Curso (PPC)</a></li>
                <li><a href="https://drive.google.com/file/d/1A9ICUxQp4Y2OZ0C4kDVt6L9BGF3AeN-V/view" target="_blank">Matriz Curricular</a></li>
                <li><a href="https://drive.google.com/file/d/1Ykh2uN1ldkuFunrDIjMb1Ioww03mH0y4/view?usp=sharing" target="_blank">Horário do Semestre (2021.2)</a></li>
                <li><a href="http://ufape.edu.br/sites/temaunidades.ufrpe.br/files/comissoes/Resolu%C3%A7%C3%A3o%20CONSU_UFAPE%20015-2020.pdf" target="_blank">Nova Resolução de Atividades Complementares</a></li>

                <!-- <li>Manual do Discente</li> -->
            </ul>

        </div>
    </div>
@endsection
