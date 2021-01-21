@extends('layout')

@section('title')Продукты@endsection

@section('main_content')
<style>
    .tables{
        height: 30px;
        font-size: 14px;
        margin-top: 20px
    }

    .company{
        color: #1d2124;
    }

</style>

    <div style="margin-top: 50px">
        <div class="tables" style="text-align: center">
            <button href="home" type="submit" class="btn btn-success"
                    style="background-color: #1a202c;color: #a0aec0; width: 50em; text-align: center; height: 30px">Создать</button>
        </div>
    </div>

    <table style="width: 100%; margin-top: 20px" id="customers_table" class="tables dataTable no-footer">
        <thead>
        <tr style=" background: #ffc912; height: 50px">
            <td><b>ID</b></td>
            <td><b>Наименование предприятия</b></td>
            <td><b>Изменить</b></td>
            <td><b>Удалить</b></td>
        </tr>
        </thead>
        <tbody>
        <? $num = 1; ?>
        @foreach ($products as $company)

        <tr class="td-height tables" style="border-bottom: solid #b6b6b6 1px;" id="in_company" data-id="<?= $company->id ?>">
            <td id="id"><?= $company->id ?></td>
            <td id="name">
                <a class="company" href="about_product/id/<?= $company->id ?>" style="text-decoration: none;" target="_blank">
                    <b><?= $company->name ?></b>
                </a></td>
            <td>
                <a class="company" href="/main/change_company/id/<?= $company->id ?>" style="text-decoration: none;"
                   target="_blank">Изменить
                </a>
            </td>
            <td>
                <a class="company" href="/main/delete_company/id/<?= $company->id ?>" style="text-decoration: none;"
                   target="_blank">Удалить
                </a>
            </td>
        </tr>

        <? $num++ ?>
        @endforeach
        </tbody>
    </table>


<script>

    $('#archive').on('click', function () {
        var archiveId = $(this).data('id');
        $.ajax({
            url: '/main/delete_company/id/' + archiveId,
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                if (data.status === 'OK') {

                    $('#in_archive<?= $company->id ?>').remove();
                } else {
                  alert("Error");
                }
            }
        });
    });

</script>

@endsection


