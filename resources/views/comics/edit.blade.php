@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1 class="text-center my-4">Modifica Comic: {{ $comic->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf

                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input 
                        value="{{ old('title', $comic->title) }}"
                        type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required>
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="1024">{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input 
                        value="{{ old('thumb', $comic->thumb) }}"
                        type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci il percorso dell'immagine..." maxlength="1024">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo*</label>
                        <input 
                        value="{{ old('price', $comic->price) }}"
                        type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo..." min="0.5" max="3000" required>
                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input 
                        value="{{ old('series', $comic->series) }}"
                        type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie..." maxlength="200" >
                        @error('series')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sale-date" class="form-label">Data</label>
                        <input 
                        value="{{ old('sale_date', $comic->sale_date) }}"
                        type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" >
                        @error('sale_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo*</label>
                        <input 
                        value="{{ old('type', $comic->type) }}"
                        type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="200" required>
                        @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @php
                            $replacedArtists = str_replace(['[',']','"','"'],'', $comic->artists);
                        @endphp
                        <label for="artists" class="form-label">Aggiungi artisti separati da virgola</label>
                        <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="3" placeholder="Aggiungi artisti separati da ','..." maxlength="1024" required>{{ old('artists', $replacedArtists) }}</textarea>
                        @error('artists')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @php
                            $replacedWriters = str_replace(['[', ']', '"'],'', $comic->writers);
                        @endphp
                        
                        <label for="writers" class="form-label">Aggiungi scrittori separati da virgola</label>
                        <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" rows="3" placeholder="Aggiungi scrittori separati da ','..." maxlength="1024" required>{{ old('writers', $replacedWriters) }}</textarea>
                        @error('writers')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
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