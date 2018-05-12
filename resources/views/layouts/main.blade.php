<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>dEx_Teste - Douglas Fortunato</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="container pt-3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">dEx Teste</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/noticias">Notícias</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('conteudo')

        <footer class="container-fluid py-4 px-0 bg-dark">
            <div class="container color-white">
                <div class="row">
                    <div class="col-12">
                        <h3>dEx Teste</h3>
                        <p class="mb-1">Douglas Fortunato</p>
                        <p class="mb-1">douglasfortunato@hotmail.com</p>
                        <p class="mb-0">(51) 98135-5949</p>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>