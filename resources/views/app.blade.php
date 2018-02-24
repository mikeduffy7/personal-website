<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Duffy</title>

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway|Supermercado+One" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- Custom Styles -->
        <link rel="stylesheet" href="/css/app.css">
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

        @yield('content')
    </body>
</html>
