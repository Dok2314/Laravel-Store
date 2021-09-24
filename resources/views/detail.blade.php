@extends('master')
@section('content')

<div class="container">
    <div class="row">
         <div class="col-sm-6">
            <img src="/images/{{$product->gallery}}" width="400px" height="400px" alt="">
         </div>
         <div class="col-sm-6">
            <a href="{{route('home')}}"><button style="margin-top:10px;" class="pressed-button">Назад</button></a>
            <h1>{{$product->name}}</h1>
            <h3>{{$product->price}}$</h3>
            <p> <span style="color:red; font-size:20px;">Описание:</span> {{$product->description}}</p>
            <br>
            <form action="{{route('add-to-cart')}}" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="pressed-button">Добавить В Корзину</button>
            </form>
            <br>
            <br>
         </div>
    </div>
</div>
@endsection
