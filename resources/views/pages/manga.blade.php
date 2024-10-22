@extends("layouts.app")

@section("page-title", "Manga")

@section("main-content")
<div class="container">
    <div class="row mb-2">
    @foreach ($manga as $item )
        <div class="card" style="width: 18rem;">
            <img src="{{$item["immagine"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $item["titolo"] }}</h1>
            <p class="card-text">Descrizione: {{ $item["descrizione"] }}</p>
            <p class="card-text"><strong> Prezzo: {{ $item["prezzo"] }} </strong></p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
