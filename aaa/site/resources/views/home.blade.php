@extends('layout')

@section('title')Вход@endsection

@section('main_content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div style="margin-top: 100px">
    <form method="post" action="product/check" role="form" style="margin-left: auto; margin-right: auto; width: 12em">
        @csrf
        <div class="form-group">
            <label for="inputUsernameEmail">Логин</label>
            <input type="text" class="form-control" name="inputUsernameEmail" id="inputUsernameEmail" placeholder="Введите Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Пароль</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn btn-success" style="background-color: #399191">
            Войти
        </button>
    </form>
</div>

@endsection

@section('footer_content')

@endsection
