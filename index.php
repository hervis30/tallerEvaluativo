<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjerciciosWeb1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="salpicon.php">Salpicon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="bancolombia.php">Bancolombia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicio2.php">BodyTech</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h4 class="text-center text-white">Suma - Resta - Multiplicacion - Division</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Primer numero</label>
                            <input type="number" class="form-control" placeholder="Ingrese el primer numero" id="exampleInputPassword1" name="numero1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Segundo numero</label>
                            <input type="number" class="form-control" placeholder="Ingrese el segundo numero" id="exampleInputPassword1" name="numero2">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="boton">Calcular</button>
                    </form>

                </div>
            </div>
        </div>
    </main>
    <?php
    if (isset($_POST["boton"])) {

        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;

        echo ("<br>");
        echo ("<br>");
        echo ("La suma de los dos numero es igual a: " . $suma);
        echo ("<br>");
        echo ("<br>");
        echo ("La resta de los dos numeros es igual a: " . $resta);
        echo ("<br>");
        echo ("<br>");
        echo ("La multiplicacion de los dos numero es igual a: " . $multiplicacion);
        echo ("<br>");
        echo ("<br>");
        echo ("La division de los dos numeros es igual a: " . $division);
    }


    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>