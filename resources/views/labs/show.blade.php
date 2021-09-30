@extends("templates.app")
@section("head")
    <link rel="stylesheet" href="{{asset('css/labs.css')}}">
@endsection

@section("content")
<h2 id="title" class="center">Laboratórios do curso de Ciência da Computação</h2>
<div class="course-labs-container center">
<div id="obj" style="margin-top:0px" class="course-labs">Laboratório de Estudo</div>
<img src="img/foto-lab-13.jpeg" width="450" height="auto" style="margin-bottom: 10px">
<p> O Laboratório 13 é compartilhado para estudos e atividades individuais e em equipe.</p>

<div id="obj" style="margin-top:0px"class="course-labs">Laboratório de Pesquisa e Projetos</div>
<img src="img/foto-lab.jpeg" width="450" height="auto" style="margin-bottom: 10px">
    <p> O Laboratório 24 é compartilhado para Projetos de Pesquisa e Desenvolvimento.</p>

    <div id="obj" style="margin-top:0px"class="course-labs">Laboratórios de Aulas Práticas</div>
    <img src="img/foto-labs.jpeg" width="450" height="auto" style="margin-bottom: 10px">
    <img src="img/foto-labs-2.jpeg" width="450" height="auto" style="margin-bottom: 10px">
    <p> Os Laboratórios 10, 11, 12, 21, 22 e 23 são disponibilizados para aulas e práticas pedagógicas no geral.</p>

</div>
@endsection


