@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="my-4 text-center">
    Comics index
</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $singleComic)     
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="{{ $singleComic->thumb }}" class="card-img-top" alt="{{ $singleComic->title }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $singleComic->title }}</h5>
                  <ul class="card-text list-unstyled">
                    <li>Descrizione: {{ $singleComic->descrtiption }}</li>
                    <li>Prezzo: ${{ $singleComic->price }}</li>
                    <li>Serie: {{ $singleComic->series }}</li>
                    <li>Data: {{ $singleComic->sale_date }}</li>
                    <li>Tipo: {{ $singleComic->type }}</li>
                    <div class="border">
                        <h2>Artisti:</h2>
                        <ul>
                            @foreach (json_decode($singleComic->artists) as $singleArtist)
                                <li>{{ $singleArtist }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="border">
                        <h2>Scrittori:</h2>
                        <ul>
                            @foreach (json_decode($singleComic->writers) as $singleWriter)
                                <li>{{ $singleWriter }}</li>
                            @endforeach
                        </ul>
                    </div>
                  </ul>
                  <a href="{{ route('comics.show', ['comic' => $singleComic->id]) }}" class="btn btn-primary my-2">Visualizza Comic</a>
                  <a href="{{ route('comics.edit', ['comic' => $singleComic->id]) }}" class="btn btn-warning text-white">Modifica Comic</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection