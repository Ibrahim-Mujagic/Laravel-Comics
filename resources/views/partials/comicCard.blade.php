@foreach ($comicsCards as $comic)
<a href="{{route('comic_detail',['id'=>$comic['id']])}}" class="comic-card">
  <div class="image-container">
    <img src="{{$comic['thumb']}}" alt="">
  </div>
  <h3>{{$comic['title']}}</h3>
</a>
@endforeach