@extends('layouts.main')

@section('title', 'Criar Livro')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu anuncio</h1>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Livro:</label>
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Livro:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Livro">
    </div>
    <div class="form-group">
      <label for="date">Data de publicação:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">Preço:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="R$">
    </div>
    <div class="form-group">
      <label for="title">O Livro é usado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Descrição do Livro?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione Gêneros:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Ação"> Ação
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Aventura"> Aventura
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Romance"> Romance
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Suspense"> Suspense
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Ficção"> Ficção
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Didático"> Didático
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Outros"> Outros
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Anuncio">
  </form>
</div>

@endsection
