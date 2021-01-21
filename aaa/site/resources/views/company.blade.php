@extends('layout')

@section('title')Создание компании@endsection

@section('main_content')

    <style>

        .inp{
            width: 300px;
            height: 30px;
        }
    </style>
<div style="text-align: center; margin-top: 50px">
    <form form method="post" action="product/check" role="form" style="margin-left: auto; margin-right: auto; width: 300px">
        <table class="fancyTable">
            <tr>
                <td class="fancyTd">
                    <b>Название</b>
                </td>
            </tr>
            <tr class="withBorder">
                <td class="fancyTd">
                    <input type="text" id="name-company" name="name-company" class="inp" style="width: 300px; height: 30px" placeholder="Введите название копмпании">
                </td>
            </tr>

            <tr>
                <td class="fancyTd">
                    <b>Адрес</b>
                </td>
            </tr>
            <tr class="withBorder">
                <td class="fancyTd">
                    <input type="text" id="adres-company" name="adres-company" class="inp" placeholder="Введите адрес вашей компании">
                </td>
            </tr>

            <tr>
                <td class="fancyTd">
                    <b>Страна</b>
                </td>
            </tr>
            <tr class="withBorder">
                <td class="fancyTd">
                    <input type="text" id="cuntry-company" name="cuntry-company" class="inp" placeholder="Введите страну">
                </td>
            </tr>

            <tr class="withBorder">
            </tr>
        </table>
        <table class="fancyTable" style="height: 50px">
            <tr>
                <td class="buttons">
                    <button href="product" type="submit" class="btn btn-success">Создать</button>
                </td>
            </tr>
        </table>
    </form>
</div>

@endsection
