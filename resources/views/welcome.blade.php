@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div id="search-conteiner" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar um evento">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Eventos encontrados</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($event as $events)
            <div class="card col-md-3">
                <img src="/img/event1.jpg" alt="{{ $events->title }}">
                <div class="card-body">
                    <p class="card-date">10/09/2021</p>
                    <h4 class="card-title">{{ $events->title }}</h4>
                    <p class="card-participantes">X participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


