<!DOCTYPE html>
<html>

<head>
    <!-- Define el conjunto de caracteres para el documento -->
    <meta charset="utf-8">
    <!-- Define el título del documento -->
    <title>Bienvenido a tu WebApp</title>
    <!-- Enlaza una hoja de estilo de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Enlaza una hoja de estilo local -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @if (false)
        //UsuarioRegistado
    @else
        <h1>Por favor, debes iniciar sesión o registrarte</h1>

        <a href="login.php">Iniciar sesión</a> o
        <a href="signup.php">Registrarse</a>
    @endif
</body>

</html>
