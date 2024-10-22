@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<div class="container">
    <div class="row mb-2">
    @foreach ($comics as $comic )
        <div class="card" style="width: 18rem;">
            <img src="{{$comic["thumb"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $comic["title"] }}</h1>
            <p class="card-text">Descrizione: {{ $comic["description"] }}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
