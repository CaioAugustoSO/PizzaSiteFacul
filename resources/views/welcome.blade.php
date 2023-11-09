@extends('layouts.main')

@section('title', 'Páginas e Reliquias')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um livro</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Livros</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            @if($event->image)
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            @else
            <img src="/img/events/vazio.jpg" alt="">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
        </div>
    </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possivel encontrar nenhum Livro com o nome: {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>Não há livros disponíveis</p>
        @endif
    </div>
</div>

@endsection
