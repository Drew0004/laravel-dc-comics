@extends('layouts.app')

@section('page-title', 'Create')

@section('main-content')
    <h1 class="text-center my-4">Aggiungi un nuovo Comic</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="200" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="1024"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il percorso dell'immagine..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo*</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." min="0.50" max="3000" required>
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." maxlength="200" >
                    </div>

                    <div class="mb-3">
                        <label for="sale-date" class="form-label">Data</label>
                        <input type="date" class="form-control" id="sale-date" name="sale_date" >
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo*</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="200" required>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection