@extends("layouts.app")

@section("page-title", "Manga Index")

@section("main-content")
<h1 class="text-center text-white mb-4">
    Pagina del fumetto {{$item["titolo"]}}
</h1>
<div class="container">
    <div class="row mb-2">
        <div class="card">
            <img src="{{$item["immagine"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $item["titolo"] }}</h1>
            <p class="card-text">Descrizione: {{ $item["descrizione"] }}</p>
            <p class="card-text"><strong> Prezzo: {{ $item["prezzo"] }} </strong></p>
            </div>
        </div>
    </div>
</div>
@endsection
