<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Mulish', sans-serif;
            background-color: salmon;
            background-image: url("\img\fondo.png");
        }
        .form-text{
            color:white;
        }
        .form-label{
            color:white;
            width: 100%;
        }
        .form-control{
            color: white;
            background: none;
            border: 2px solid white;
        }
        .btn-primary{
            width: 100%;
        }
        .imagen{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .imgTittle{
            width: 450px;
	        height: 150px;
	        object-fit: none;
        }
        .izquierda{
            height: 400px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            background-color: rgba(48, 108, 119, 0.7);
        }
    </style>
</head>
<body>
    <img src="\img\fondo2.png" class="imagen">
    <div class="container w-25 p-4 mt-5">
    <img src="\img\indice.png" class="imgTittle">
    <label for="tittle" class="form-label text-end mb-4">¡Que la lluvia no te pare!</label><!--
        <form action="{{route('todos')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tittle" class="form-label text-end mb-4">¡Que la lluvia no te pare!</label>
                <input type="text" name="tittle" placeholder="Introduce el código postal" class="form-control">
            </div>
            <button type="submit" class="btn-primary">Buscar</button>
            <div class="form-text text-center mt-5">¡Que la lluvia no te pare!</div>
        </form>-->
    </div>
    <!--
    <div class="container w-100 border p-4 mt-5 ">
    <div class="container w-50 border p-4 mt-5 izquierda">
        <i class="fa-solid fa-snowflake">a</i>
    </div>
    <div class="container w-25 border p-4 mt-5 ">
        <i class="fa-solid fa-snowflake">a</i>
    </div>
    </div>
                <i class="fa-solid fa-snowflake">a</i>
                <i class="fa-solid fa-magnifying-glass-location"></i>
                <i class="fa-solid fa-bolt-lightning"></i>
    -->
    <div class="container w-100 border">
        <div class="row">
            <div class="col p-3 izquierda">
                One of three columns
                
            </div>
            <div class="col p-3 col-lg-1">
            </div>
            <div class="col p-3 col-lg-2 izquierda">
                <div class="banner2"></div>
                One of three columns
            </div>
        </div>
    </div>
</body>
</html>