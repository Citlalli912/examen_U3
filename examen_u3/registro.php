<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <div class="container">
        <h1>Registrar</h1>
        <form action="validar_login.php" method="post">
            <label for="user">Ingrese usuario</label>
            <br>
            <input type="text" name="user" id="user" required>
            <label for="user">Ingrese Email</label>
            <br>
            <input type="text" name="email" id="email" required>
            <label for="pass">Ingrese Contraseña</label>
            <br>
            <input type="password" name="pass" id="pass" required>
            
            <input type="submit" value="Enviar">
            <br>
            <br>
            <input type="submit" value="Iniciar Sesión">

            
        </form>
    </div>
</body>
</html>