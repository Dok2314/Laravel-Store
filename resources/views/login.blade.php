@extends('master')
@section('content')
<div class="container custom-login">
        <div class="row justify-content-md-center">
            <div class="col-sm-4">
                    <form action="/login" method="POST"  class="form-control">
                    @csrf
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
                        </div>
                        @error('email') <div class="alert alert-danger">{{$message}}</div>@enderror
                        <div class="form-group">
                            <label for="password">Пароль:</label>
                            <input type="password" name="password" id="password" placeholder="Пароль" class="form-control">
                        </div>
                        @error('password') <div class="alert alert-danger">{{$message}}</div>@enderror
                        <br>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
        </div>
    </div>
</div>
@endsection