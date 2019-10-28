<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carona solidária </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e2fef2;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title m-b-md">
                    Carona solidária - Tabelas do banco de dados
                </div>

                <div style="display: inline-block;">
                  <p style="font-size: 20px;">
<h1>
                    <a href="/carros">Carro </a> -
                    <a href="/caronas">Carona</a> -
                    <a href="/caronapas">Carona_passageiro</a> -
                    <a href="/cidades">Cidade </a> -
                    <a href="/destinos">Destino </a> -
                    <a href="/estados">Estado </a> -
                    <a href="/modelos">Modelo_carro</a> -
                    <a href="/usuarios">Usuario </a>
                  </h1>

                    </p>
                </div>
            </div>

            @show
            <div class="full-height" style="text-align: center;">
              <div>
                  <table class="table table-bordered">
              @yield('content')
            </div>
    </body>
</html>
