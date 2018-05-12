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
        <header class="container-fluid admin-header">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark navbar-laravel fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    dEx_Teste
                </a>
                <button class="navbar-toggler ml-auto" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav ml-auto d-none d-xl-flex">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="oi oi-account-logout"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </nav>
        </header>

        <div class="container-fluid admin-container">

            <aside class="side-menu-wrapper">
                <ul class="side-menu">
                    <li><a href="/admin">Home</a></li>
                    <li><a href="/admin/noticias">Notícias</a></li>
                    <li><a href="/" target="_blank">Ver o site</a></li>
                    <li>
                        <a class="d-xl-none" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="oi oi-account-logout"></i> Sair
                        </a>
                    </li>
                </ul>
            </aside>

            @yield('conteudo')

        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>