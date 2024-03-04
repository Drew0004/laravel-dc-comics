@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1 class="text-center my-4">Aggiungi un nuovo Comic</h1>

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
                
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required value="{{ old('title') }}" >
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="1024">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci il percorso dell'immagine..." maxlength="1024" value="{{ old('thumb') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo*</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo..." min="1" max="3000" required value="{{ old('price') }}">
                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie..." maxlength="200" value="{{ old('series') }}">
                        @error('series')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sale-date" class="form-label">Data</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale-date" name="sale_date" value="{{ old('sale_date') }}">
                        @error('sale_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo*</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="200" required value="{{ old('type') }}">
                        @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">Aggiungi artisti separati da virgola</label>
                        <textarea class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" rows="3" placeholder="Aggiungi artisti separati da ','..." maxlength="1024" >{{ old('artists') }}</textarea>
                        @error('artists')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Aggiungi scrittori separati da virgola</label>
                        <textarea class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" rows="3" placeholder="Aggiungi scrittori separati da ','..." maxlength="1024" >{{ old('writers') }}</textarea>
                        @error('writers')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <button class="btn btn-success " type="submit">
                        Aggiungi +
                    </button>

                    
                </form>
            </div>
        </div>
    </div>
@endsection