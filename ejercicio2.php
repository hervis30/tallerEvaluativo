<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="ejercicio3.php">Sprint Step</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Principal</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h4 class="text-center text-white">IMG Gimnacio Bodytech</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="ejercicio2.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Peso</label>
                            <input type="number" class="form-control" placeholder="Ingrese su peso" id="exampleInputPassword1" name="peso">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Altura</label>
                            <input type="number" class="form-control" placeholder="Ingrese su altura" id="exampleInputPassword1" step="0.01" name="altura">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="boton1">IMG_Calculado</button>
                    </form>

                </div>
            </div>
        </div>
    </main>
    <?php

    if (isset($_POST["boton1"])) {

        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $img = $peso / ($altura * $altura);

        switch ($img) {
            case $img < 18.5:
                echo ("Su indice de masa corporal es : " . $img . " Peso insuficiente");
                break;
            case 18.5 < $img && $img < 24.9:
                echo ("Su indice de masa corporal es : " . $img . " Normopeso");
                break;
            case 25 < $img && $img < 26.9:
                echo ("Su indice de masa corporal es : " . $img . " Sobre peso grado I");
                break;
            case 27 < $img && $img < 29.9:
                echo ("Su indice de masa corporal es : " . $img . " Sobre peso grado II (Preobesidad)");
                break;
            case 30 < $img && $img < 34.9:
                echo ("Su indice de masa corporal es : " . $img . " Obesidad tipo I ");
                break;
            case 35 < $img && $img < 39.9:
                echo ("Su indice de masa corporal es : " . $img . " Obesidad tipo II ");
                break;
            case 40 < $img && $img < 49.9:
                echo ("Su indice de masa corporal es : " . $img . " Obesidad tipo III (morbida) ");
                break;
            case 50 < $img:
                echo ("Su indice de masa corporal es : " . $img . " Obesidad grado IV (Extrema) ");
                break;
        }
    }


    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>