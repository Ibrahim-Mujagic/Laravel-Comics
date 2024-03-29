@extends('layouts.main')

@section('main')
  @include('partials.jumbotron')
  <div class="comics-card-section">
    <div class="cards-container">
      @include('partials.comicCard')
    </div>
    @include('partials.blueButton')
  </div>
  <div class="shop-section">
    @include('partials.shopCard')
  </div>
  @include('partials.footer')
@endsection
