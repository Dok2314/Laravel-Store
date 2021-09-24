@extends('master')
@section('content')

<div class="container">  
<h3>Список Покупок</h3>
<a href="{{route('ordernow')}}" class="btn btn-success">Купить Сейчас</a><br><br>
<div class="trending-wrapper">
  @foreach($products as $prod)
    <div class="container cart-list-devider">
        <div class="row">
        <div class="col-sm-3">
      <a href="detail/{{$prod->id}}">
      <img src="/images/{{$prod->gallery}}" class="trending-image" width="180px" height="200px">
      </a>
      </div>

      <div class="col-sm-3">
        <h3 style="text-align:center;">{{$prod->name}}</h3>
        <p>{{$prod->description}}</p>
      </div>

      <div class="col-sm-6" style="margin-top:107px;">
      <a href="{{route('removecart',$prod->cart_id)}}" class="btn btn-warning">Удалить Из Корзины</a>
      </div>
        </div>
    </div>
@endforeach
</div>
@endsection
