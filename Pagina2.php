<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>

</head>
<body>
    <?php
    session_start();

    if (isset($_SESSION['Usuario'])) {
        header("Location: ingresar.php");
        exit();
    }
    ?>

    <header>
     <h1>Página de Inicio</h1>
    </header>

    <main>
        <table>
            <tr>
                <td id="papucirculo"><a href="paciente.php">Registrar paciente</a></td>
                <td>
                    <p>ID de Paciente</p>
                    <p>Nombre del Paciente</p>
                    <p>Fecha de nacimiento</p>
                    <p>Dirección</p>
                    <p>Número de teléfono</p>
                    <p>Ciudad de residencia</p>
                </td>
            </tr>
            <tr>
                <td id="papucirculo"><a href="diagnostico.php">Diagnostico</a></td>
                <td>
                    <p>ID de Paciente</p>
                    <p>ID del Diagnostico</p>
                    <p>Condicion Médica</p>
                    <p>Fecha de consulta</p>
                </td>
            </tr>
            <tr>
                <td id="papucirculo"><a href="resultadoslab.php">Resultados de laboratorio</a></td>
                <td>
                    <p>ID de Paciente</p>
                    <p>ID de los resultados</p>
                    <p>Prueba</p>
                    <p>Precio de la prueba</p>
                    <p>Fecha de los resultados</p>
                </td>
            </tr>
            <tr>
                <td id="papucirculo"><a href="medicamento.php">Medicamento</a></td>
                <td>
                    <p>ID de Paciente</p>
                    <p>ID de medicamento</p>
                    <p>Nombre del medicamento</p>
                    <p>Dosis</p>
                    <p>Instrucciones</p>
                </td>
            </tr>
            <tr>
                <td id="papucirculo"><a href="plantratamiento.php">Planes de tratamiento</a></td>
                <td>
                    <p>ID de Paciente</p>
                    <p>ID de tratamiento</p>
                    <p>ID de diagnostico</p>
                    <p>Tratamiento</p>
                    <p>Fecha del tratamiento</p>
                </td>
            </tr>
    </table>
    </main>
   <style type="text/css">
       td{ background-color: rgba(187, 241, 242, 0.5);}
       h1{ background-color:rgb(242, 188, 187, 1.0); }
       p{ font-weight:bold; width: 300px;}
       table, tr, td{ border:3px solid blueviolet;}
       td{ width:60%; padding: 10px;}
       #papucirculo{ border-radius: 50%; text-align: center;}
       table{ width:110%; }
       body{ display: inline-flex; text-align: center; justify-content: center; align-items: center;}
   </style>

</body>
</html>