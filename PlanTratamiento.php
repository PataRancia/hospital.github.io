<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados de Laboratorio</title>
    
</head>
<body>
    <form method="POST" action="">
        <p>ID Paciente:            </p><input type="number" name="IDpaciente">
        <p>ID Plan de tratamiento: </p><input type="number" name="IDtratamiento">
        <p>ID iagnostico:      </p><input type="number" name="IDdiagnostico">
        <p>Tratamiento:         </p><input type="text" name="tratamiento">
        <p>Fecha:     </p><input type="date" name="fechaTrat">
        <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    include 'conexion.php';  // Conexión con la base de datos
    if (isset($_POST['Enviar'])) { // Insertar la información
        $IDpaciente = $_POST['IDpaciente'];
        $IDtratamiento = $_POST['IDtratamiento'];
        $IDdiagnostico = $_POST['IDdiagnostico'];
        $tratamiento = $_POST['tratamiento'];
        $fechaTrat = $_POST['fechaTrat'];
        // Insertar la información usando una declaración preparada
        $sql = "INSERT INTO plantratamiento (IDpaciente, IDtratamiento, IDdiagnostico, tratamiento, fechaTrat) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssss", $IDpaciente, $IDtratamiento, $IDdiagnostico, $tratamiento, $fechaTrat);
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
