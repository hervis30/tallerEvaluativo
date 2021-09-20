<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="ejercicio9.php">Selec Colombia</a>
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
            <div class="row d-flex justify-content-center">
                <h4 class="text-center text-white">Calculo edad Jugadores Seleccion Colombia</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="ejercicio8.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">nombre del jugador</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del jugador" id="exampleInputPassword1" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">año de nacimiento</label>
                            <input type="number" class="form-control" placeholder="Ingrese el año de nacimiento" id="exampleInputPassword1" name="fechaNacimiento">
                        </div>

                        <button type="submit" class="btn btn-primary w-100" name="boton">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
    if (isset($_POST["boton"])) {
        $nombreJugador = $_POST["nombre"];
        $agnoNacimiento = $_POST["fechaNacimiento"];
        $agnoActual = 2021;
        function calcularEdad($agnoNacimiento, $agnoActual)
        {
            $edad = $agnoActual - $agnoNacimiento;
            return ($edad);
        }
        echo ("La edad del jugador " . $nombreJugador . " es: " . calcularEdad($agnoNacimiento, $agnoActual) . " años");
        ("<br>");
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>