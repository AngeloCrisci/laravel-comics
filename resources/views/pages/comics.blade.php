@extends("layouts.app")

@section("page-title", "Comics")

@section("main-content")
<div class="container">
    <div class="row mb-2">
    @foreach ($comics as $comic )
        <div class="card" style="width: 18rem;">
            <img src="{{$comic["thumb"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $comic["title"] }}</h1>
            <p class="card-text">Descrizione: {{ $comic["description"] }}</p>
            <p class="card-text"><strong> Prezzo: {{ $comic["price"] }} </strong></p>
            <p class="card-text"><strong> Serie: {{ $comic["series"] }}</strong></p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
