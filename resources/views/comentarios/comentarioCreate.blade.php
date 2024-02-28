<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</head>
<body>
    <a href='/info'>Informacion</a>
    <form action="/comentario" method="POST">
        @csrf 
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre')}}"><br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" value="{{ old('correo')}}">
        <br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" cols="30" rows="5" >{{ old('nombre')}}</textarea>
        <label for="ciudad">Ciudad</label><br>
        <select name ="ciudad">
            <option value="GDL" @selected(old('ciudad') == 'GDL')>GDL</option>
            <option value="CDMX" @selected(old('ciudad') == 'CDMX')>CDMX</option>
            <option value="Monterrey" @selected(old('ciudad') == 'Monterrey')>Monterrey</option>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>