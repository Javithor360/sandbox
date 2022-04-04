<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="assets/img/register.ico" type="image/x-icon">
        <title>Registrarse</title>
        <link rel="stylesheet" href="{{ asset('./assets/css/register.css') }}">
    </head>
    <body>

        <div class="wrapper fadeInDown">
            <div id="formContent">
            
                <h2 class="active"> Registro de usuarios </h2>

            <div class="fadeIn first">
                <p>¡Bienvenido!<br>Ingresa tus datos para crearte una cuenta</p>
            </div>

            <form action="/forms" method="post">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nombre">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">
                <input type="email" id="login" class="fadeIn second" name="email" placeholder="Correo eléctronico">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Registrarse">
            </form>

        </div>
    </div>

    </body>
</html>
