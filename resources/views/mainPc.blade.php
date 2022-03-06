<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Pc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

    </style>
</head>
<body>
    <img src="resources\images">
    <div class="container w-25 border p-4 mt-5">
        <form action="{{route('todos')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tittle" class="form-label">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</label>
                <input type="text" name="tittle" placeholder="Introduce el código postal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
                <div class="form-text">¡Que la lluvia no te pare!</div>
        </form>
    </div>
    <!--@yield('content')-->
</body>
</html>