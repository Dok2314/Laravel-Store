@extends('master')
@section('content')

<div class="container">  
    <div class="col-sm-10">
        <table class="table">
    <tbody>
        <tr>
        <td>Сумма</td>
        <td>{{$total}} $</td>
        </tr>
        <tr>
        <td>Налог</td>
        <td>0 $</td>
        </tr>
        <tr>
        <td>Доставка</td>
        <td>10 $</td>
        </tr>
        <tr>
        <td>Всего: </td>
        <td>{{$total+10}} $</td>
        </tr>
    </tbody>
    </table>
    <div>
    <form action="{{route('orderplace')}}" method="POST" class='form-control'>
      @csrf
  <div class="form-group">
  <label for="exampleInputPassword1">E-mail адресс:</label>
    <textarea type="email" name="address" placeholder="Укажите свой адресс" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="">Способ Оплаты:</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Visa Mastercard</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Privat 24</span><br><br>
    <input type="radio" value="cash" name="payment"><span>При Получении</span><br><br>

  </div>
  <br>
  <button type="submit" class="btn btn-success">Купить</button>
</form>
    </div>
    </div>
</div>
@endsection
