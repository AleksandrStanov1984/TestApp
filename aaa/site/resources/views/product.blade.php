@extends('layout')

@section('title')Продукты@endsection

@section('main_content')

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .app {
            max-width: 600px;
            margin: 5px;
        }

        .list {
            display: flex;
            justify-content: space-between;
        }

        .card {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: box-shadow .3s ease-in-out;
        }

        .card:hover {
            box-shadow: 15px 15px 0 rgba(71, 66, 66, 0.50);
        }

        .card-img {
            display: flex;
            align-items: center;
            height: 100px;
        }

        .car img {
            width: 100%;
        }
    </style>

    <table class="table table-borderless">
        <div style="text-align: center; color: #399191; margin-top: 50px">
            <h2><b>Наша продукция</b></h2>
        </div>

        <tbody>
        <? $num = 1; ?>
        @foreach ($products as $product)
            <tr>
                {{--            <? $num = 1; ?>--}}
                {{--            @foreach ($products as $product)--}}
                <td>
                    <div class="app list">
                        <div class="card-img card">
                            <img src={{$product->img}}>
                            <span style="font-size: 8px">{{$product->category}}</span>
                            <span style="padding: 0 0 1px 1px; font-size: 12px">{{$product->name}}</span>
                            <p style="color: #39b54a; padding: 0 1px 1px 0; font-size: 12px">{{$product->price}}</p>
                        </div>
                    </div>
                </td>

            </tr>
            <? $num++; ?>
        @endforeach
        </tbody>
    </table>

@endsection


