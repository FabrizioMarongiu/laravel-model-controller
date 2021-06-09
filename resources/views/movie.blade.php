@extends('layouts.main')

@section('content')
<main>

    <h1>Lista dei film a disposizione</h1>

    <div class="container">
        <section class="cards">
            
            @foreach ($movies as $movie)

                <div class="card">
                    <h3><span class="blue">Titolo:</span>  {{ $movie->title }} </h3>
                    <h3><span class="blue">Titolo originale:</span>  {{ $movie->original_title }} </h3>
                    <h3><span class="blue">Nazionalità:</span> {{ $movie->nationality }} </h3>
                    <h3><span class="blue">Uscita:</span> {{ $movie->date }} </h3>
                    <h3><span class="blue">Voto:</span> {{ $movie->vote }} </h3>
                </div>

            @endforeach
        
        </section>
    </div>
    
</main>
    

@endsection