@extends('layouts.main')

@section('content')
<main>

    <h1>Lista dei film a disposizione</h1>

    <div class="container">
        <section class="cards">
            
            @foreach ($movies as $movie)

                <div class="card">
                    <h2> {{ $movie->title }} </h2>
                </div>

            @endforeach
        
        </section>
    </div>
    
</main>
    

@endsection