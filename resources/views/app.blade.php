<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Duffy</title>

        <!-- TODO: consider using Less-->
        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway|Supermercado+One" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <body>
        <nav class="navbar is-transparent">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    DUFFY
                </a>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a class="navbar-item" href="about">
                            About Me
                        </a>
                        <a class="navbar-item" href="code">
                            Code
                        </a>
                        <a class="navbar-item" href="writing">
                            Writing
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="iconsContainer">
            <div>
                <a href="https://medium.com/@duffy.ma7" target="_blank">
                <i class="fab fa-2x fa-medium"></i></a></div>
            <div>
                <a href="https://github.com/mikeduffy7" target="_blank">
                    <i class="fab fa-2x fa-github"></i></a></div>
        </div>

        @yield('content')
    </body>
</html>
