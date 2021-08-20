@extends('templates.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/documents.css')}}">
@endsection

@section('content')
<div class="documents">DOCUMENTOS</div>
    <div class="form-row documents-container">
        <div class="documents-container">
            <strong>ANEXOS</strong>
            <a href="#">doc1</a>
            <a href="#">doc2</a>
            <a href="#">doc3</a>
            <a href="#">doc4</a>
        </div>
        <div class="documents-container">
            <strong>FORMULÁRIOS</strong>
            <a href="#">doc1</a>
            <a href="#">doc2</a>
            <a href="#">doc3</a>
            <a href="#">doc4</a>
        </div>
    </div>
@endsection
