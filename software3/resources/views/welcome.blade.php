<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejelogistica</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #B45F04;
                color: #190707;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #DF0101;
                padding: 0 25px;
                font-size: 20px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EJE LOGISTICA
                </div>

                <div class="links">
                    <a href="https://www.claro.com.co/personas/servicios/servicios-hogar/">CLARO</a>
                    <a href="https://www.tigo.com.co/">TIGO-UNE</a>
                    <a href="https://www.movistar.co/ofertas/hogar/multioferta/?tab=home&gclid=EAIaIQobChMIh7Hey-fb3QIVVQOGCh2GSAV_EAAYASAAEgKUz_D_BwE&gclsrc=aw.ds&dclid=CPbJidPn290CFdF8wQod33YN4w">MOVISTAR</a>
                    {{-- <a href="https://nova.laravel.com">Nova</a> --}}
                    {{-- <a href="https://forge.laravel.com">Forge</a> --}}
                    {{-- <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
