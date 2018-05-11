<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="container-fluid admin-header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand mr-auto" href="/admin">dEx Teste</a>
                
                <span class="navbar-text">
                    <a href="#" class="d-none d-xl-block"><i class="oi oi-account-logout"></i> Sair</a>
                    <button class="d-xl-none"><i class="oi oi-menu"></i></button>
                </span>
            </nav>
        </header>

        <div class="container-fluid admin-container">

            <aside class="side-menu-wrapper">
                <ul class="side-menu">
                    <li><a href="/admin">Home</a></li>
                    <li><a href="/admin/noticias">Notícias</a></li>
                    <li><a href="/" target="_blank">Ver o site</a></li>
                    <li><a href="#" class="d-xl-none"><i class="oi oi-account-logout"></i> Sair</a></li>
                </ul>
            </aside>

            @yield('conteudo')

        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>