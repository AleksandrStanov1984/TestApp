@extends('layout')

@section('title')Продукты@endsection

@section('main_content')


<div>
    <table style="width: 100%; margin-top: 20px" id="customers_table" class="tables dataTable no-footer">
        <thead>
        <tr style=" background: #ffc912; height: 50px">
            <td><b>ID</b></td>
            <td><b>Имя клиента</b></td>
            <td><b>Изменить</b></td>
            <td><b>Удалить</b></td>
        </tr>
        </thead>
        <tbody>
        <? $num = 1; ?>
        @foreach ($contacts as $c)

            <tr class="td-height tables" style="border-bottom: solid #b6b6b6 1px;" id="in_company" data-id="<?= $c->id ?>">
                <td id="id"><?= $c->id ?></td>
                <td id="name">
                    <span><b><?= $c->name ?></b></span>
                </td>
            </tr>
            <? $num++ ?>
        @endforeach
        </tbody>
    </table>
</div>

    <di>
        <a class="company" href="product" style="text-decoration: none;"
           target="_blank">Назад к списку компаний
        </a>
    </di>











@endsection

@section('footer_content')

@endsection
