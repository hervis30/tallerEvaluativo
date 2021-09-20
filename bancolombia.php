<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bancolombia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="ejercicio4.php">Postobon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="container">

            <div class="row d-fex justify-content-center">

                <h4 class="text-center">Usuarios Bancolombia</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="bancolombia.php" method="POST">

                        <?php for ($i = 0; $i <= 4; $i++) { ?>
                            <div class="mb-3">

                                <h4>Informacion de los usuarios:</h4>
                                <label class="form-label">nombre</label>
                                <input type="text" class="form-control" name="nombre[]" id="exampleInputPassword1" placeholder="Ingrese nombre">

                                <label class="form-label">telefono</label>
                                <input type="text" class="form-control" name="telefono[]" id="exampleInputPassword1" placeholder="Ingrese telefono">

                                <label class="form-label">direccion</label>
                                <input type="text" class="form-control" name="direccion[]" id="exampleInputPassword1" placeholder="Ingrese direccion">

                                <label class="form-label">salario</label>
                                <input type="number" class="form-control" name="salario[]" id="exampleInputPassword1" placeholder="Ingrese salario">
                                <br>
                                <br>
                                <br>
                            </div>
                        <?php } ?>

                        <button type="submit" class="btn btn-primary w-100" name="boton">Registrar</button>

                    </form>
                </div>


            </div>
        </div>
        </div>

        <?php
        if (isset($_POST["boton"])) {

            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $salario = $_POST["salario"];

            $sucursalA = array(
                "nombre" => $nombre, "direccion" => $direccion, "telefono" => $telefono, "salario" => $salario
            );

            //print_r($sucursalA);




            echo ("<br>");
            echo ("La informacion correspondiente al usuario 1: es: ");
            echo ("<br>");
            echo ("Nombre: " . $sucursalA["nombre"][0]);
            echo ("<br>");
            echo ("Direccion: " . $sucursalA["direccion"][0]);
            echo ("<br>");
            echo ("Telefono: " . $sucursalA["telefono"][0]);
            echo ("<br>");
            echo ("Salario: " . $sucursalA["salario"][0]);
            echo ("<br>");
            echo ("<br>");
            echo ("La informacion correspondiente al usuario 2: es: ");
            echo ("<br>");
            echo ("Nombre: " . $sucursalA["nombre"][1]);
            echo ("<br>");
            echo ("Direccion: " . $sucursalA["direccion"][1]);
            echo ("<br>");
            echo ("Telefono: " . $sucursalA["telefono"][1]);
            echo ("<br>");
            echo ("Salario: " . $sucursalA["salario"][1]);
            echo ("<br>");
            echo ("<br>");
            echo ("La informacion correspondiente al usuario 3: es: ");
            echo ("<br>");
            echo ("Nombre: " . $sucursalA["nombre"][2]);
            echo ("<br>");
            echo ("Direccion: " . $sucursalA["direccion"][2]);
            echo ("<br>");
            echo ("Telefono: " . $sucursalA["telefono"][2]);
            echo ("<br>");
            echo ("Salario: " . $sucursalA["salario"][2]);
            echo ("<br>");
            echo ("<br>");
            echo ("La informacion correspondiente al usuario 4: es: ");
            echo ("<br>");
            echo ("Nombre: " . $sucursalA["nombre"][3]);
            echo ("<br>");
            echo ("Direccion: " . $sucursalA["direccion"][3]);
            echo ("<br>");
            echo ("Telefono: " . $sucursalA["telefono"][3]);
            echo ("<br>");
            echo ("Salario: " . $sucursalA["salario"][3]);
            echo ("<br>");
            echo ("<br>");
            echo ("La informacion correspondiente al usuario 5: es: ");
            echo ("<br>");
            echo ("Nombre: " . $sucursalA["nombre"][4]);
            echo ("<br>");
            echo ("Direccion: " . $sucursalA["direccion"][4]);
            echo ("<br>");
            echo ("Telefono: " . $sucursalA["telefono"][4]);
            echo ("<br>");
            echo ("Salario: " . $sucursalA["salario"][4]);
            echo ("<br>");
            echo ("<br>");
            $sumaSalariosA = ($sucursalA["salario"][0])
                + ($sucursalA["salario"][1])
                + ($sucursalA["salario"][2])
                + ($sucursalA["salario"][3])
                + ($sucursalA["salario"][4]);
            echo ("<br>");
            echo ("<br>");
            echo ("Los salarios de la Sucursal A, suman: " . $sumaSalariosA);
            echo ("<br>");
            $sucursalB = 40000000;
            $sucursalC = 32000000;
            echo ("<br>");
            echo ("<br>");
            if ($sumaSalariosA > $sucursalB && $sumaSalariosA > $sucursalC) {
                echo ("La sucursal con el salario mas alto es la sucursal A, con un salario de: " . $sumaSalariosA);
            } elseif ($sucursalB > $sumaSalariosA && $sucursalB > $sucursalC) {
                echo ("La sucursal con el salario mas alto es la sucursal B, con un salario de: " . $sucursalB);
            } elseif ($sucursalC > $sumaSalariosA && $sucursalC > $sucursalB) {
                echo ("La sucursal con el salario mas alto es la sucursal C, con un salario de: " . $sucursalC);
            }
        }
        ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>