<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php require 'partials/header.php'; ?>

    <h1>Iniciar sesión</h1>
    <span>o <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST" onsubmit="return validateForm()">
        <input id="email" name="email" type="text" placeholder="Ingresa tu correo electrónico" required>

        <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" required>

        <input type="submit" value="Enviar">
    </form>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (email == "" || password == "") {
                alert("Por favor, completa todos los campos.");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
