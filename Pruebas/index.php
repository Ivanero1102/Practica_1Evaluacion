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
        <?php
            $pagina = 0;
            if(isset($_GET['pagina'])){
                $pagina = $_GET['pagina'];
            }
            if(isset($_POST['pagina'])){
                $pagina = $_POST['pagina'];
            }
            switch ($pagina) {
                case 1:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                            <a href='index.php'>
                                <button class='cell_menu'>Log out</button>
                            </a>
                        </div>
                        <div class='bar'>
                            <p>Bienvenido: ..... </p>
                        </div>
                        <div class='tabla'>
                            <h1>Clientes</h1>
                        </div>
                        <div class='menu'>
                            <a>
                                <button class='active'>Cliente</button>
                            </a>
                            <a href='index.php?pagina=2'>
                                <button class='cell_menu'>Trabajos</button>
                            </a>
                            <a href='index.php?pagina=3'>
                                <button class='cell_menu'>Empleados</button>
                            </a>
                            <a href='index.php?pagina=4'>
                                <button class='cell_menu'>Departamento</button>
                            </a>
                            <a href='index.php?pagina=5'>
                                <button class='cell_menu'>Ubicacion</button>
                            </a>
                        </div>";
                    break;                    
                case 2:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                            <a href='index.php'>
                                <button class='cell_menu'>Log out</button>
                            </a>
                        </div>
                        <div class='bar'>
                            <p>Bienvenido: ..... </p>
                        </div>
                        <div class='tabla'>
                            <h1>Trabajos</h1>
                        </div>
                        <div class='menu'>
                            <a href='index.php?pagina=1'>
                                <button class='cell_menu'>Cliente</button>
                            </a>
                            <a>
                                <button class='active'>Trabajos</button>
                            </a>
                            <a href='index.php?pagina=3'>
                                <button class='cell_menu'>Empleados</button>
                            </a>
                            <a href='index.php?pagina=4'>
                                <button class='cell_menu'>Departamento</button>
                            </a>
                            <a href='index.php?pagina=5'>
                                <button class='cell_menu'>Ubicacion</button>
                            </a>
                        </div>";
                    break;
                case 3:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                            <a href='index.php'>
                                <button class='cell_menu'>Log out</button>
                            </a>
                        </div>
                        <div class='bar'>
                            <p>Bienvenido: ..... </p>
                        </div>
                        <div class='tabla'>
                            <h1>Empleados</h1>
                        </div>
                        <div class='menu'>
                            <a href= 'index.php?pagina=1'>
                                <button class='cell_menu'>Cliente</button>
                            </a>
                            <a href='index.php?pagina=2'>
                                <button class='cell_menu'>Trabajos</button>
                            </a>
                            <a>
                                <button class='active'>Empleados</button>
                            </a>
                            <a href='index.php?pagina=4'>
                                <button class='cell_menu'>Departamento</button>
                            </a>
                            <a href='index.php?pagina=5'>
                                <button class='cell_menu'>Ubicacion</button>
                            </a>
                        </div>";
                    break;
                case 4:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                            <a href='index.php'>
                                <button class='cell_menu'>Log out</button>
                            </a>
                        </div>
                        <div class='bar'>
                            <p>Bienvenido: ..... </p>
                        </div>
                        <div class='tabla'>
                            <h1>Departamento</h1>
                        </div>
                        <div class='menu'>
                            <a href='index.php?pagina=1'>
                                <button class='cell_menu'>Cliente</button>
                            </a>
                            <a href='index.php?pagina=2'>
                                <button class='cell_menu'>Trabajos</button>
                            </a>
                            <a href='index.php?pagina=3'>
                                <button class='cell_menu'>Empleados</button>
                            </a>
                            <a>
                                <button class='active'>Departamento</button>
                            </a>
                            <a href='index.php?pagina=5'>
                                <button class='cell_menu'>Ubicacion</button>
                            </a>
                        </div>";
                    break;
                case 5:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                            <a href='index.php'>
                                <button class='cell_menu'>Log out</button>
                            </a>
                        </div>
                        <div class='bar'>
                            <p>Bienvenido: ..... </p>
                        </div>
                        <div class='tabla'>
                            <h1>Ubicacion</h1>
                        </div>
                        <div class='menu'>
                            <a href='index.php'>
                                <button class='cell_menu'>Cliente</button>
                            </a>
                            <a href='index.php?pagina=2'>
                                <button class='cell_menu'>Trabajos</button>
                            </a>
                            <a href='index.php?pagina=3'>
                                <button class='cell_menu'>Empleados</button>
                            </a>
                            <a href='index.php?pagina=4'>
                                <button class='cell_menu'>Departamento</button>
                            </a>
                            <a>
                                <button class='active'>Ubicacion</button>
                            </a>
                        </div>";
                    break;   
                default:
                    echo "
                        <div class='navigationBar'>
                            <h1>PUFOSA S.L.</h1>
                        </div>
                        <form action='index.php?pagina=1'>
                            <label for='id'>Id:</label>
                            <input type='text' name='id' required></input>
                            <label for='password'>Contraseña:</label>
                            <input type='text' name='password' required></input>
                            <input type='hidden' name='pagina' value='1'>
                            <p><input type='submit' name='botonEnviar' value='Ingersar'></p>
                        </form>
                        ";
                    break;
                }
        ?>
    </body>
</html>