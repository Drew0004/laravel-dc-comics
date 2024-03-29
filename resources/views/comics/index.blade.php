@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="my-4 text-center">
    Comics index
</h1>
<div class="container">
    <div class="row">
        @foreach ($comics as $singleComic)     
        <div class="col-3">
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
                    <div>
                        <h6 class="my-2">Artisti:</h6>
                        <ul>
                            @foreach (json_decode($singleComic->artists) as $singleArtist)
                                <li>{{ $singleArtist }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h6 class="my-2">Scrittori:</h6>
                        <ul>
                            @foreach (json_decode($singleComic->writers) as $singleWriter)
                                <li>{{ $singleWriter }}</li>
                            @endforeach
                        </ul>
                    </div>
                  </ul>
                  <a href="{{ route('comics.show', ['comic' => $singleComic->id]) }}" class="btn btn-primary">Visualizza Comic</a>
                  <a href="{{ route('comics.edit', ['comic' => $singleComic->id]) }}" class="btn btn-warning text-white my-2">Modifica Comic</a>
                  <form
                    onsubmit="return confirm('Sei sicuro di voler eliminare questo Comic?');"
                    action="{{ route('comics.destroy', ['comic' => $singleComic->id]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Elimina
                    </button>
                </form>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection