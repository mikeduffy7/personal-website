<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Duffy</title>

        <!-- bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway|Supermercado+One" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Duffy</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="about">About Me</a></li>
                        <li><a href="code">Code</a></li>
                        <li><a href="writing">Writing</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- insert partials here -->
        @yield('content')

    </body>
    <footer class="footer">
        <div class="container text-center">
            <div class="footer-icons">
                <a href="https://medium.com/@duffy.ma7" target="_blank">
                    <i class="fab fa-2x fa-medium"></i>
                </a>
                <a href="https://github.com/mikeduffy7" target="_blank">
                    <i class="fab fa-2x fa-github"></i>
                </a>
            </div>       
        </div>
    </footer>
</html>
