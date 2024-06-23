<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados Laboratorio</title>
    
</head>
<body>
    <form method="POST" action="">
        <p>Resultados: </p><input type="number" name="IDresultado">
        <p>Paciente:   </p><input type="number" name="IDpaciente">
        <p>Prueba:     </p><input type="text" name="prueba">
        <p>Precio:     </p><input type="number" name="precio">
        <p>Fecha:      </p><input type="date" name="fechaLab">
        <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    include 'conexion.php';  // Conexión con la base de datos
    if (isset($_POST['Enviar'])) { // Insertar la información
        $IDpaciente = $_POST['IDpaciente'];
        $IDresultado = $_POST['IDresultado'];
        $prueba = $_POST['prueba'];
        $precio = $_POST['precio'];
        $fechaLab = $_POST['fechaLab'];
        // Insertar la información usando una declaración preparada
        $sql = "INSERT INTO resultadoslab (IDpaciente, IDresultado, prueba, precio, fechaLab) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("issss", $IDpaciente, $IDresultado, $prueba, $precio, $fechaLab);
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
