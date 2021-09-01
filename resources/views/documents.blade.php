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
                    <li><a href="http://ufape.edu.br/sites/temaunidades.ufrpe.br/files/comissoes/Resolu%C3%A7%C3%A3o%20678%20de%202008%20%28Est%C3%A1gio%20Supervisionado%20Obrigat%C3%B3rio%29.pdf">
                        Estágio Supervisionado Obrigatório(ESO)</li>
                    <li>Trabalho de Conclusão do Curso (TCC)</li>
               </ul>
                <li>PPC do Curso</li>
                <li><a href="http://ufape.edu.br/sites/temaunidades.ufrpe.br/files/comissoes/Matriz_Curricular_BCC.pdf">Matriz Curricular</a></li>
                <li><a href= "http://ufape.edu.br/sites/temaunidades.ufrpe.br/files/comissoes/Bcc_2020_2.pdf">Horário do Semestre</a></li>
                <li>Manual do Discente</li>
            </ul>

        </div>
    </div>
@endsection
