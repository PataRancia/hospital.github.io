<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicamentos</title>
    
</head>
<body>
    <form method="POST" action="">
        <p>ID del paciente:                       </p><input type="number" name="IDpaciente">
        <p>ID del medicamento:                    </p><input type="number" name="IDmedicamento">
        <p>Nombre del medicamento:         </p><input type="text" name="nombreMed">
        <p>Dosis:                          </p><input type="text" name="dosis">
        <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    include 'conexion.php';  // Conexión con la base de datos
    if (isset($_POST['Enviar'])) { // Insertar la información
        $IDpaciente = $_POST['IDpaciente'];
        $IDmedicamento = $_POST['IDmedicamento'];
        $nombreMed = $_POST['nombreMed'];
        $dosis = $_POST['dosis'];

        // Insertar la información usando una declaración preparada
        $sql = "INSERT INTO medicamento (IDpaciente, IDmedicamento, nombreMed, dosis) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssss", $IDpaciente, $IDmedicamento, $nombreMed, $dosis);
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
