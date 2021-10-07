<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('titulo')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://getbootstrap.com.br/docs/4.1/examples/starter-template/starter-template.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Projeto A.D.E.S.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="@yield('home')" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="@yield('agremiacao')" href="/agremiacao">Agremiação</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Desativado</a>
                </li>                    
                </ul>
            </div>
            @guest
            <div class="my-2 my-sm-0">
                    <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-outline-primary" href="{{ route('register-user') }}">Register</a>
                @else
                    <a class="btn btn-outline-success" href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="btn btn-outline-danger" href="{{ route('signout') }}">Logout</a>
            </div>
            @endguest
        </nav>
                
        <main class="flex-shrink-0" role="main">
            <div class="container">
                @yield('conteudo')
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>