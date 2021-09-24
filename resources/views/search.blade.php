@extends('master')
@section('content')

<div class="container">  
<h3>Найденый Товар</h3>
<div class="trending-wrapper d-flex justify-content-around">
  @foreach($products as $prod)
    <div class="trending-item">
      <a href="detail/{{$prod->id}}">
      <img src="/images/{{$prod->gallery}}" class="trending-image" width="180px" height="200px">
        <h3 style="text-align:center;">{{$prod->name}}</h3>
      </a>
    </div>
@endforeach
</div>
@endsection
