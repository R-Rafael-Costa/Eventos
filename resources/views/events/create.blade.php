@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="from-control-file" name="image" id="image">    
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nome do Evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" name="city" id="city placeholder="Cidade do Evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>    
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento..."></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras" id="">Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco" id="">Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis" id="">Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food" id="">Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes" id="">Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection