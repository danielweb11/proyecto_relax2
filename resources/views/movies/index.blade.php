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

        <h1>Registro de Peliculas</h1>

        <form action="{{route('movies.store')}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <label class="input-group-text" >Titulo</label>
                <input type="text" name="titulo" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" >Duracion (min)</label>
                <input type="number" name="duracion" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" >Fecha de Lanzamiento</label>
                <input type="date" name="fecha_lanzamiento" class="form-control">
            </div>      

            <div class="input-group mb-3">
                <select name="publicado" class="form-select">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>


        </form>

    </div>




    <table class="container text-center">
        <thead>
            <td>ID</td>
            <td>TITULO</td>
            <td>DURACION(min)</td>
            <td>FECHA LANZAMIENTO</td>
            <td>PUBLICADA</td>
            <td>Opciones</td>
        </thead>

        <tbody>
           @foreach ($movies as $movie)
                <tr>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->duration}}</td>
                    <td>{{$movie->release_date}}</td>
                    <td>{{$movie->is_published}}</td>
                    <td>
                        <a href="{{route('movies.edit',$movie->id)}}" class="btn btn-warning">Editar</a>

                        <form action="{{route('movies.destroy',$movie->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
           @endforeach
        </tbody>

    </table>
    
</body>
</html>