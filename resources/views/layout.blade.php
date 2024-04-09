<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <nav class="purple">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo center">Curso Lanravel</a>
            <ul id="nav-mobile" class="left">
                <li><a href="">Home</a></li>
                <li><a href="">Carrinho</a></li>
                <li><a href="">JavaScript</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('conteudo')
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
