@extends('layouts.app')

@section('title', 'Auth Pets')

@section('content')
    <h2>Adicione um Pet à sua coleção</h2>
    <x-alerta tipo="success" :mensagem="$mensagemDeSucesso"/>
@endsection
