@extends("templates.app")
@section('head')
    <link rel="stylesheet" href="{{ asset('css/remote-classes.css') }}">
@endsection

@section('content')
    <div class="remote-class">ENSINO REMOTO</div>
    <div>
        <ul class="links-container">
            <li><a href="#">Resolução ensino remoto</a></li>
            <li><a
                    href="https://docs.google.com/spreadsheets/d/1tJLUqA1wRpgsXSfb6SQ4IkJYGwGGRddhjye8NTVDxU0/edit?urp=gmail_link#gid=0">Salas Virtuais de Ensino</a></li>
            <li><a
                    href="http://ufape.edu.br/br/funcionamento-administrativo-laborat%C3%B3rios-durante-per%C3%ADodo-letivo-20201">Funcionamento administrativo e de laboratórios durante o Período Letivo 2020.1</a></li>
        </ul>
    </div>
@endsection
