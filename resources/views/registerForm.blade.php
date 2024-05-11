<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Iniciar sesión</a></span>

    <form action="signup.php" method="POST" onsubmit="return validateForm()">
        <input id="nombreusuario" name="nombreusuario" type="text" placeholder="Ingresa tu nombre de usuario" required>

        <input id="email" name="email" type="text" placeholder="Ingresa tu correo electrónico" required>

        <!-- Nuevo campo de entrada para el campus -->
        <input id="campus" name="campus" type="text" placeholder="Ingresa tu campus" required>

        <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" required>

        <input id="confirm_password" name="confirm_password" type="password" placeholder="Confirma tu contraseña"
            required>

        <input type="submit" value="Enviar">
    </form>
