<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/app.scss">
    <link rel="stylesheet" href="../css/iconButtons.scss">


    <title>@yield('title')</title>
</head>

<body>

<div style="font-family:Verdana, Arial, 'Harlow Solid Italic', sans-serif; font-size: 15px; background-color: #393737"
     class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 text-white border-bottom shadow-sm">
    <h5 data-toggle="tooltip" data-placement="top" style="margin-right: 300px"
            title="ЛОГОТИП"></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <span class="p-2 text-white" href="home" data-toggle="tooltip" data-placement="top">ЛОГОТИП</span>
    </nav>
</div>

<div class="container">
    @yield('main_content')
</div>

<div class="footer">
    @yield('footer_content')
</div>

<footer style="background-color: #393737; position: absolute; width: 100%; height: 40px; margin-top: 50px">
    <div></div>
</footer>


</body>
</html>
