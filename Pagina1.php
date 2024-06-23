<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio De Sesión y Registro</title>
   
    <script>
        function showAlert(message) {
            alert(message);
        }

        function redirectToHome() {
            window.location.href = 'Pagina2.php';
        }

        function askForRegistration() {
            if (confirm("El usuario no existe. ¿Deseas registrarte?")) {
                document.getElementById('loginForm').style.display = 'none';
                document.getElementById('registrationForm').style.display = 'block';
            } else {
                showAlert('Intenta iniciar sesión nuevamente');
            }
        }
    </script>
    <style>
        #registrationForm {
            display: none;
        }
    </style>
</head>
<body>
    <div id="loginForm">
        <form method="POST" action="">
            <center><h1>Inicio de Sesión</h1></center>
            <p>Usuario: <input type="text" name="Usuario"></p>
            <p>Contraseña: <input type="password" name="password"></p>
            <input type="submit" name="IniciarSesion" value="Iniciar Sesión">
        </form>
    </div>
    <div id="registrationForm">
        <form method="POST" action="">
            <center><h1>Registro de Nuevo Usuario</h1></center>
            <p>Nombre: <input type="text" name="Nombre"></p>
            <p>Nuevo Usuario: <input type="text" name="NuevoUsuario"></p>
            <p>Nueva Contraseña: <input type="password" name="newPassword"></p>
            <input type="submit" name="Registrar" value="Registrar">
        </form>
    </div>

    <?php
    include 'conexion.php';

    if (isset($_POST['IniciarSesion'])) {
        $Usuario = $_POST['Usuario'];
        $Contraseña = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Contraseña = '$Contraseña'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>showAlert('Bienvenido, $Usuario!'); redirectToHome();</script>";
        } else {
            echo "<script>askForRegistration();</script>";
        }
    }

    if (isset($_POST['Registrar'])) {
        $Nombre = $_POST['Nombre'];
        $NuevoUsuario = $_POST['NuevoUsuario'];
        $NuevaContraseña = $_POST['newPassword'];

        $sql = "SELECT * FROM usuarios WHERE Usuario = '$NuevoUsuario'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>showAlert('El nombre de usuario ya está en uso');</script>";
        } else {
            $sql_insert = "INSERT INTO usuarios (Nombre, Usuario, Contraseña) VALUES ('$Nombre', '$NuevoUsuario', '$NuevaContraseña')";
            if ($con->query($sql_insert) === TRUE) {
                echo "<script>showAlert('Usuario registrado correctamente');</script>";
            } else {
                echo "<script>showAlert('Error al registrar el usuario: " . $con->error . "');</script>";
            }
        }
    }

    $con->close();
    ?>

    <style type="text/css">
       body{ background-color: rgba(187, 241, 242, 0.5);}
       h1{ background-color:rgb(242, 188, 187, 1.0); }
   </style>
    
</body>
</html>
