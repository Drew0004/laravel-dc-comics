@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1 class="text-center my-4">Modifica Comic: {{ $comic->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf

                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input 
                        value="{{ $comic->title }}"
                        type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="1024">{{ $comic->description }}"</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input 
                        value="{{ $comic->thumb }}"
                        type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il percorso dell'immagine..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo*</label>
                        <input 
                        value="{{ $comic->price }}"
                        type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." min="0.5" max="3000" required>
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input 
                        value="{{ $comic->series }}"
                        type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." maxlength="200" >
                    </div>

                    <div class="mb-3">
                        <label for="sale-date" class="form-label">Data</label>
                        <input 
                        value="{{ $comic->sale_date }}"
                        type="date" class="form-control" id="sale-date" name="sale_date" >
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo*</label>
                        <input 
                        value="{{ $comic->type }}"
                        type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="200" required>
                    </div>

                    <div class="mb-3">
                        @php
                            $replacedArtists = str_replace(['[',']','"','"'],'', $comic->artists);
                        @endphp
                        <label for="artists" class="form-label">Aggiungi artisti separati da virgola</label>
                        <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Aggiungi artisti separati da ','..." maxlength="1024" required>{{ $replacedArtists }}"</textarea>
                    </div>

                    <div class="mb-3">
                        @php
                            $replacedWriters = str_replace(['[', ']', '"'],'', $comic->writers);
                        @endphp
                        
                        <label for="writers" class="form-label">Aggiungi scrittori separati da virgola</label>
                        <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Aggiungi scrittori separati da ','..." maxlength="1024" required>{{ $replacedWriters }}"</textarea>
                    </div>

                    <a href="{{ route('comics.index') }}" class="btn btn-warning text-white">Annulla</a>
                    
                    <button class="btn btn-success text-white" type="submit">
                        Modifica
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection