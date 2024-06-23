<!DOCTYPE html>
<!--Archivo para insertar nuevos diagnósticos en la base de datos. Usa una declaración preparada en PHP para prevenir inyecciones SQL.-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pacientes</title>
    <link rel="stylesheet" type="text/css" href="estilosTablas.css">
</head>
<body>
    <form method="POST" action="">
        <p>Paciente:               </p><input type="number" name="IDpaciente">
        <p>Diagnostico:            </p><input type="number" name="IDdiagnostico">
        <p>Condicion medica:       </p><input type="text" name="CondicionM">
        <p>Fecha del diagnostico:  </p><input type="date" name="fechaDia">
        <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    include 'conexion.php';  // Conexión con la base de datos
    if (isset($_POST['Enviar'])) { // Insertar la información
        $IDpaciente = $_POST['IDpaciente'];
        $IDdiagnostico = $_POST['IDdiagnostico'];
        $CondicionM = $_POST['CondicionM'];
        $fechaDia = $_POST['fechaDia'];
        // Insertar la información usando una declaración preparada
        $sql = "INSERT INTO diagnostico (IDpaciente, IDdiagnostico, CondicionM, fechaDia) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssss", $IDpaciente, $IDdiagnostico, $CondicionM, $fechaDia);
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
