@extends('layouts.main')

@section('title', 'Contato Separado')
@section('content')
    @if($id != null)
        <p>O contato escolhido foi o {{ $id }}</p>
    @endif
@endsection