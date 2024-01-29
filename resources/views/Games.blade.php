@extends('layouts.main')

@section('main')
@include('partials.jumbotron')
<div class="comics-card-section">
  <div class="cards-container">
    @include('partials.comicCard')
  </div>
  @include('partials.blueButton')
</div>
@include('partials.footer');
@endsection