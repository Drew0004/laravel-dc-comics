@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<button class="btn btn-primary">
    <a class="text-decoration-none text-white" href="{{ route('comics.index') }}">Vai a tutti i Comics</a>
</button>

@endsection
