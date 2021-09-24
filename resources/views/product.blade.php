@extends('master')
@section('content')

<div class="container d-flex justify-content-center">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      @foreach($products as $prod)
    <div class="carousel-item {{$prod->id==1?'active':''}}">
      <a href="{{route('detail',$prod->id)}}">
      <img src="/images/{{$prod->gallery}}" class="d-block" height="400px" alt="...">
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
</div>
<h3>Актуальные товары</h3>
<div class="trending-wrapper d-flex justify-content-around">
  @foreach($products as $prod)
    <div class="trending-item">
      <a href="{{route('detail',$prod->id)}}">
      <img src="/images/{{$prod->gallery}}" class="trending-image" width="180px" height="200px">
      <h6 style="text-align:center; color:red">{{$prod->price}}$</h6>
        <h3 style="text-align:center; color:black">{{$prod->name}}</h3>
      </a>
    </div>
@endforeach
</div>
@endsection
