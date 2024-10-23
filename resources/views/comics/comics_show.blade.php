@extends("layouts.app")

@section("page-title", "Comics Index")

@section("main-content")
<h1 class="text-center text-white mb-4">
    Pagina del fumetto {{$comic["title"]}}
</h1>
<div class="container">
    <div class="row mb-2">
        <div class="card col-12">
            <img src="{{$comic["thumb"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $comic["title"] }}</h1>
            <p class="card-text">Descrizione: {{ $comic["description"] }}</p>
            <p class="card-text"><strong> Prezzo: {{ $comic["price"] }} </strong></p>
            <p class="card-text"><strong> Serie: {{ $comic["series"] }}</strong></p>
            </div>
        </div>
    </div>
</div>
@endsection
