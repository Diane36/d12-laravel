<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
</head>
<body>
    <h1>Editar Comentario<h/1>
    <form action="{{ route('comentario.update', $comentario)}}" method="POST">
        @csrf 
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $comentario->comentario}}"><br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" value="{{ old ('correo') ?? $comentario->comentario}}">
        <br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" cols="30" rows="5">{{ old ('comentario') ?? $comentario->comentario}}</textarea>
        <label for="ciudad">Ciudad</label><br>
        <select name ="ciudad">
            <option value="GDL" @selected($comentario->ciudad == 'GDL')>GDL</option>
            <option value="CDMX" @selected($comentario->ciudad == 'CDMX')>CDMX</option>
            <option value="Monterrey" @selected($comentario->ciudad == 'Monterrey')>Monterrey</option>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>