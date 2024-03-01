@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1 class="my-4 text-center">
    Singolo Comic: {{ $comic->title }}
</h1>
<div class="container">
    <div class="row">    
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <ul class="card-text list-unstyled">
                    <li>Descrizione: {{ $comic->descrtiption }}</li>
                    <li>Prezzo: ${{ $comic->price }}</li>
                    <li>Serie: {{ $comic->series }}</li>
                    <li>Data: {{ $comic->sale_date }}</li>
                    <li>Tipo: {{ $comic->type }}</li>
                    <div class="my-2">
                        <h6>Artisti:</h6>
                        <ul>
                            @foreach (json_decode($comic->artists) as $singleArtist)
                                <li>{{ $singleArtist }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="my-2">
                        <h6>Scrittori:</h6>
                        <ul>
                            @foreach (json_decode($comic->writers) as $singleWriter)
                                <li>{{ $singleWriter }}</li>
                            @endforeach
                        </ul>
                    </div>
                  </ul>
                  <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna a tutti i comics</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection