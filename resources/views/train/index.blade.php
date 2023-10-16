@extends('layouts.app')

@section('main-content')
<h1 class="text-center">I Nostri Treni:</h1>
<section class="container mt-5 d-flex justify-content-center">
  @forelse($trains as $train)
  <div class="card mx-3" style="width: 18rem;">
    <div class="card-body">
      <p class="card-text"><strong> Compagnia</strong> {{ $train->company }}</p>
      <p class="card-text"><strong> Stazione di Partenza </strong>{{ $train->departure_station }}</p>
      <p class="card-text"><strong> Stazione di Arrivo </strong>{{ $train->arrival_station }}</p>
      <p class="card-text"><strong> Orario di Partenza </strong>{{ $train->departure_time }}</p>
      <p class="card-text"> <strong>Orario di Arrivo </strong>{{ $train->arrival_time }}</p>
    </div>
  </div>
  @empty
  <h2>Non ci sono risultati</h2>
  @endforelse
</section>
@endsection