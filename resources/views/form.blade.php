<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Formulario</title>
</head>
    <h1>Adivina Mi Número</h1>
    <body>
            <form action="/adivinar" method="post">
                @csrf
                <label for="numeroInput" >Número</label><br>
                <input type="number" name="numero" id="numeroInput" placeholder="Introduzca un entero" min="1" max="10000000000" value="">
                <button type="submit">Aceptar</button>    
            </form>

            @error('numero')
                <div style="color:red">
                    {{$message}}
                </div>
            @enderror

            <script>
                
            </script>

    </body>
</html>