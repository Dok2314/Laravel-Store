<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('myorders')}}">Заказы</a>
        </li>
        <form action="/search" class="d-flex form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Найти Товар" aria-label="Search" style="margin-right: 10px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="d-flex">
        <a href="{{route('cartlist')}}" class="pressed-button" style="margin-left: 250px; margin-right:50px;">Корзина({{$total}})</a>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('logout')}}">Выйти</a>
        </div>
      </li>
    </li>
    @else
    <a href="{{route('login')}}"><button class="btn btn-primary">Войти</button></a>
    <a href="{{route('registration')}}"><button class="btn btn-primary" style="margin-left:5px;">Регистрация</button></a>
    @endif
    </ul>
    </div>
  </div>
</nav>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
  });
</script>