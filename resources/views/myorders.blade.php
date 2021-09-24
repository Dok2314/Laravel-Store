@extends('master')
@section('content')

<div class="container">  
<h3>Мои Заказы</h3>
<div class="trending-wrapper">
  @foreach($orders as $prod)
    <div class="container cart-list-devider">
        <div class="row">
        <div class="col-sm-3">
      <a href="detail/{{$prod->id}}">
      <img src="/images/{{$prod->gallery}}" class="trending-image" width="180px" height="200px">
      </a>
      </div>

      <div class="col-sm-3">
        <h5 style="text-align:center;">Товар : {{$prod->name}}</h5>
        <h5 style="text-align:center;">Статус Доставки : {{$prod->status}}</h5>
        <h5 style="text-align:center;">Адресс : {{$prod->address}}</h5>
        <h5 style="text-align:center;">Статус Оплаты : {{$prod->payment_status}}</h5>
        <h5 style="text-align:center;">Способ Оплаты : {{$prod->payment_method}}</h5>
      </div>

      
        </div>
    </div>
@endforeach
</div>
@endsection
