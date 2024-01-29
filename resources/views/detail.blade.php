@extends('layouts.main')

@section('main')
@include('partials.jumbotron')
  <div class="cont-detail-card">
    <div class="card-detail">
      <h2>{{$comics_filtered['title']}}</h2>
      <img src="{{$comics_filtered['thumb']}}" alt="">
      <p>{!! $comics_filtered['description'] !!}</p>
      <p>{{$comics_filtered['price']}}</p>  
      <p>{{$comics_filtered['sale_date']}}</p>  
      <p>{{$comics_filtered['type']}}</p>  
    </div>
  </div>

@endsection