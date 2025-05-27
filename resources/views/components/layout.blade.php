<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>IMC</title>
</head>

<body>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/imc">Calcule o IMC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Saiba mais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quem somo nós</a>
            </li>
            <li class="nav-item">
                    @auth
                    <a class="nav-link" href="/logout">Logout</a>
                    @else
                    <a class="nav-link" href="/login">Login</a>
                    @endauth
            </li>
        </ul>
        <br><br><br><br>

        {{$slot}}

    </div>
        <footer>
            ESSE É FOOTER
        </footer>

</body>

</html>