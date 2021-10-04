@extends('layouts.main')

@section('title', 'Contato')
@section('content')
    <h1>Página de contato</h1>
    @if($busca != '')
        <p>Voce esta buscando por: {{ $busca }}</p>
    @endif
@endsection
