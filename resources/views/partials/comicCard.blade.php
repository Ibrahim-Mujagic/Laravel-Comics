@foreach ($comicsCards as $comic)
<div class="comic-card">
  <div class="image-container">
    <img src="{{$comic['thumb']}}" alt="">
  </div>
  <h3>{{$comic['title']}}</h3>
</div>
@endforeach