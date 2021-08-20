@extends("templates.app")
@section("head")
<link rel="stylesheet" href="{{asset('css/remote-classes.css')}}">
@endsection

@section("content")
<div class="remote-class">ENSINO REMOTO</div>
<div class="remote-class-container">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    <div class="links-container">
        <a href="#">link1</a>
        <a href="#">link2</a>
        <a href="#">link3</a>
        <a href="#">link4</a>
    </div>
</div>
@endsection
