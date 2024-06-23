<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paciente</title>
   
</head>
<body>
    <form method="POST" action="">
        <p>Paciente:            </p><input type="number" name="IDpaciente">
        <p>Nombre:              </p><input type="text" name="nombre">
        <p>Fecha de nacimiento: </p><input type="date" name="fechaN">
        <p>Dirección:           </p><input type="text" name="direccion">
        <p>Número de Teléfono:  </p><input type="text" name="tel">
        <p>Ciudad:  </p><input type="text" name="ciudad">
        <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    include 'conexion.php';  // Conexión con la base de datos
    if (isset($_POST['Enviar'])) { // Insertar la información
        $IDpaciente = $_POST['IDpaciente'];
        $Nombre = $_POST['nombre'];
        $fechaN = $_POST['fechaN'];
        $Direccion = $_POST['direccion'];
        $tel = $_POST['tel'];
        $ciudad = $_POST['ciudad'];
        // Insertar la información usando una declaración preparada
        $sql = "INSERT INTO paciente (IDpaciente, Nombre, fechaN, Direccion, tel, ciudad) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("isssss", $IDpaciente, $Nombre, $fechaN, $Direccion, $tel, $ciudad);
        if ($stmt->execute()) {
            echo "<br><br>Datos Guardados";
        } else {
            echo "Datos no guardados";
        }$stmt->close();
    }
    $con->close();// Cerrar la conexión
    ?>

    <style type="text/css">
       body{ background-color: rgba(187, 241, 242, 0.5);}
       p{ background-color:rgb(242, 188, 187, 1.0); }
   </style>
</body>
</html>
