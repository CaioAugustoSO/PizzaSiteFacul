@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Livros</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(isset($events) && count($events))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Quantia</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>{{ count($event->users) }}</td>
                    <td>
                        <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não tem livros, <a href="/events/create">criar anuncio</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Seus Livros Anunciados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(isset($eventsasparticipant) && count($eventsasparticipant))
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Quantia</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eventsasparticipant as $event)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <form action="/events/leave/{{ $event->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon>
                            Remover do Carrinho
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row-12 d-flex justify-content-center">
    <form action="/events/closecart/{{ $user->id }}" method="POST">
        @csrf
        @method("POST")
<button type="submit" class="btn btn-primary delete-btn">
    Finalizar Compra
</button>
</form>
</div>
@else
<p>Seu Carrinho está vazio</p>
@endif
</div>
@endsection
