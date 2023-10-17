@extends('layouts.app')

@section('main-content')
<h1 class="text-center">I Nostri Treni:</h1>
<section class="container mt-5 d-flex flex-wrap">
  @forelse($trains as $train)
  <div class="card my-3 w-100">
    <div class="card-body">
      <p class="card-text"><strong> Compagnia:</strong> {{ $train->company }}</p>
      <p class="card-text"><strong> Stazione di Partenza:</strong>{{ $train->departure_station }}</p>
      <p class="card-text"><strong> Stazione di Arrivo:</strong>{{ $train->arrival_station }}</p>
      <p class="card-text"><strong> Orario di Partenza:</strong>{{ $train->departure_time }}</p>
      <p class="card-text"> <strong>Orario di Arrivo:</strong>{{ $train->arrival_time }}</p>
      @if (@$train->train_on_time)
      <p class="card-text"><strong>È in orario ? </strong> Si, partirà il giorno : {{ $train->arrival_time }}</p>
      @else
      <p class="card-text"> <strong>È in orario ? </strong>No</p>
      @endif
    </div>
  </div>
  @empty
  <h2>Non ci sono risultati</h2>
  @endforelse
</section>
@endsection