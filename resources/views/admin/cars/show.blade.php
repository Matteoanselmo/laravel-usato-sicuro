<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Auto Singola
        </h1>
        <a href="{{route("home")}}">Home page</a>
        <a href="{{route("admin.cars.index")}}">Lista Completa</a>
        <h3>
            {{$car->model}} - {{$car->marca}}
        </h3>
        <form action="{{route("admin.cars.destroy", $car)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Elimina</button>
        </form>
    </div>
    
</body>
</html>