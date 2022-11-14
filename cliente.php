<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stile.css"/>
        <title>Document</title>
    </head>
    <body>
        <div class="navigationBar">
            <h1>PUFOSA S.L.</h1>
        </div>
        <div class="bar">
            <p>Bienvenido: ..... </p>
        </div>
        <div class="tabla">
            <h1>Clientes</h1>
        </div>
        <div class="menu">
            <!-- <a href="main.php">
                <button class="cell_menu">Main</button>
            </a> -->
            <a>
                <button class="active">Cliente</button>
            </a>
            <a href="trabajos.php">
                <button class="cell_menu">Trabajos</button>
            </a>
            <a href="empleados.php">
                <button class="cell_menu">Empleados</button>
            </a>
            <a href="departamento.php">
                <button class="cell_menu">Departamento</button>
            </a>
            <a href="ubicacion.php">
                <button class="cell_menu">Ubicacion</button>
            </a>
        </div>
        <?php
        include 'conexion.php';
            $sql= "SELECT * FROM ALUMNOS";
            echo "Conexion exitosa";
            echo "<h2>listado de la tabla alumnos</h2>";
            echo "<table>";
            echo "<tr><th>CÓDIGO</th><th>NOMBRE</th><th>APELLIDOS</th><th>TELÉFONO</th><th>CORREO</th></tr>";
            foreach ($conn->query($sql) as $row){
                echo "<tr><td>".$row["CODIGO"]."</td><td>".$row["NOMBRE"]."</td><td>".$row["APELLIDOS"]."</td><td>".$row["TELEFONO"]."</td><td>".$row["CORREO"]."</td></tr>";
            }
        ?>
    </body>
</html>