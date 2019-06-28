<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .imagenCabecera{
            float:right;
            padding-right:150px;
            width:150px;
        }
        .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 100px;
            color: #090;
        }
        .contenido form, table{
            width: 300px;
            margin: 0 auto;
            width: 500px;
        }
        .pie{
            position: fixed;
            bottom: 0px;
            width:100%;
            font-size: 0.7em;
            margin-bottom: 15px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="cabecera">
        @yield('cabecera')
        <img src="/images/logo.jpg" class="imagenCabecera">
    </div>

    <div class="contenido">
        @yield('contenido')
    </div>

    <div class="pie">
        @yield('pie')
        Gobierno Autonomo de El Alto
    </div>
</body>
</html>