<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            </div>
        </div>
    </nav>
</header>

<body class="bg-dark text-white">
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h4 class="text-center text-white">Postobon</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="ejercicio4.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">nombre del trabajador</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del trabajador" id="exampleInputPassword1" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Horas trabajadas</label>
                            <input type="number" class="form-control" placeholder="Ingrese la cantidad de horas trabajadas" id="exampleInputPassword1" name="horasTrabajadas">
                        </div>

                        <button type="submit" class="btn btn-primary w-100" name="boton">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
    if (isset($_POST["boton"])) {
        $horasTrabajadas = $_POST["horasTrabajadas"];
        $nombre = $_POST["nombre"];

        if ($horasTrabajadas > 40) {
            $horasExtras = $horasTrabajadas - 40;
            $salarioSemanal = $horasExtras * 25000 + 40 * 20000;
        } else {
            $salarioSemanal = $horasTrabajadas * 20000;
        }
        echo ("El salario semanal del trabajador " . $nombre . "  es: " . $salarioSemanal);
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>