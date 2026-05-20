<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">

        <h1>Vista para Actualizar Peliculas</h1>

        <form action="{{route('movies.update',$movie->id)}}" method="post">
            @csrf
            @method('put')

            <div class="input-group mb-3">
                <label class="input-group-text" >Titulo</label>
                <input type="text" name="titulo" class="form-control" value="{{$movie->title}}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" >Duracion (min)</label>
                <input type="number" name="duracion" class="form-control" value="{{$movie->duration}}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" >Fecha de Lanzamiento</label>
                <input type="date" name="fecha_lanzamiento" class="form-control" value="{{$movie->release_date}}">
            </div>      

            <div class="input-group mb-3">
                <select name="publicado" class="form-select">
                    <option value="1"
                        {{$movie->is_published==1 ? 'selected' : ''}} > Sí</option>
                    <option value="0"
                        {{$movie->is_published==0 ? 'selected' : ''}} > No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>


        </form>

    </div>
    
</body>
</html>