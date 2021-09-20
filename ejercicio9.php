<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
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
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h4 class="text-center text-white">Calcule Biotipo de Jugadores de Seleccion Colombia</h4>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <form action="ejercicio9.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nombre del jugador</label>
                            <input type="text" class="form-control" placeholder="Ingrese nombre del jugador" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Altura del jugador</label>
                            <input type="number" class="form-control" step="0.01" placeholder="Ingrese la estatura del jugador" id="nombre" name="altura">
                        </div>
                        <button type="submit" class="btn btn-success w-100" name="boton">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <?php
    if (isset($_POST["boton"])) {
        $nombre = $_POST["nombre"];
        $altura = $_POST["altura"];


        if ($altura < 1.70) {
            $biotipo = "bajo";
        } else if ($altura >= 1.70 && $altura < 1.80) {
            $biotipo = "promedio";
        } else if ($altura >= 1.80) {
            $biotipo = "superior";
        } else {
            echo ("revise los datos de entrada");
        }
        echo ("El biotipo de: " . $nombre . " es: " . $biotipo);
    }

    ?>

    <h1 class="text-center"><?php echo ("El biotipo de: " . $nombre . " es: " . $biotipo) ?></h1>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>