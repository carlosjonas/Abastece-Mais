<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Fonte do Google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!-- CSS da aplicação-->
        <link rel="stylesheet" type="text/css" href="/css/styles.css">

        <!--Link dos ícones-->
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">

        <script type="text/javascript" src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/banner.jpg" alt="Abastece Mais">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Abastecimentos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/suplly/create" class="nav-link">Criar Abastecimento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/car/main" class="nav-link">Carros</a>
                        </li>
                        <li class="nav-item">
                            <a href="/car/create" class="nav-link">Adicionar Carros</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Carros</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" name="logout" action="{{ route('logout') }}">
                                @csrf
                                <a href="javascript:document.logout.submit()" class="nav-link">Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg')}} <button type="button" class="btn-close" disabled aria-label="container-fluid"></button></p>

                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
    
        <footer>
            <p>Abastece Mais &copy; 2022</p>    
        </footer>  
    </body>
</html>
