@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/documents.css')}}">
@endsection

@section('content')
<div class="documents">DOCUMENTOS</div>
    <div class="form-row documents-container">
        <div class="documents-container">
            <strong>Informações Gerais do Curso</strong>
            <ul>
                <li>Curso: Ciência da Computação</li>
                <li>Modalidade: Bacharelado</li>
                <li>Título do egresso: Bacharel em Ciência da Computação</li>
                <li>Área de conhecimento: Ciências Exatas e da Terra</li>
                <li>Modalidade de Educação: Presencial (ensino a distância restrito ao percentual imposto por legislação em vigor).</li>
                <li>Número de vagas: 80 (oitenta) vagas anuais, sendo 40 (quarenta) vagas semestrais</li>
                <li>Carga horária: 3.200 (três mil e duzentas) horas</li>
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
                <li><a href="https://drive.google.com/file/d/1ar9GSqJOTYUOHIMmEoDbPg_syhIbB53k/view" target="_blank">PPP do Curso</a></li>
                <li><a href="https://drive.google.com/file/d/1A9ICUxQp4Y2OZ0C4kDVt6L9BGF3AeN-V/view" target="_blank">Matriz Curricular</a></li>
                <li><a href="http://ufape.edu.br/sites/temaunidades.ufrpe.br/files/comissoes/Bcc_2020_2.pdf" target="_blank">Horário do Semestre</a></li>
                <li>Manual do Discente</li>
            </ul>

        </div>
    </div>
@endsection
