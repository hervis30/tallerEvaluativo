<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salpicon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="ejercicio8.php">Selec Colombia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Principal</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <form action="salpicon.php" method="POST">

                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Selecione la combinacion de frutas para el salpicon</label>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta1">
                                    <option>mango </option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta2">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta3">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta4">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta5">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta6">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"></label>
                                <select id="disabledSelect" class="form-select" name="fruta7">
                                    <option>mango</option>
                                    <option>banana</option>
                                    <option>piña</option>
                                    <option>naranja</option>
                                    <option>fresa</option>
                                    <option>papaya</option>
                                    <option>manzana</option>
                                </select>
                            </div>
                            <button type="submit" name="boton" class="btn btn-primary w-100">Genere Salpicon</button>
                    </form>
                </div>
    </main>


    <?php

    if (isset($_POST["boton"])) {

        $fruta1 = $_POST["fruta1"];
        $fruta2 = $_POST["fruta2"];
        $fruta3 = $_POST["fruta3"];
        $fruta4 = $_POST["fruta4"];
        $fruta5 = $_POST["fruta5"];
        $fruta6 = $_POST["fruta6"];
        $fruta7 = $_POST["fruta7"];




        switch ($fruta1) {
            case $fruta1 == "mango":
                $foto1 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta1 == "banana":
                $foto1 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta1 == "piña":
                $foto1 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta1 == "naranja":
                $foto1 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta1 == "fresa":
                $foto1 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta1 == "papaya":
                $foto1 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta1 == "manzana":
                $foto1 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }

        switch ($fruta2) {
            case $fruta2 == "mango":
                $foto2 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta2 == "banana":
                $foto2 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta2 == "piña":
                $foto2 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta2 == "naranja":
                $foto2 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta2 == "fresa":
                $foto2 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta2 == "papaya":
                $foto2 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta2 == "manzana":
                $foto2 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }

        switch ($fruta3) {
            case $fruta3 == "mango":
                $foto3 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta3 == "banana":
                $foto3 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta3 == "piña":
                $foto3 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta3 == "naranja":
                $foto3 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta3 == "fresa":
                $foto3 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta3 == "papaya":
                $foto3 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta3 == "manzana":
                $foto3 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }


        switch ($fruta4) {
            case $fruta4 == "mango":
                $foto4 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta4 == "banana":
                $foto4 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta4 == "piña":
                $foto4 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta4 == "naranja":
                $foto4 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta4 == "fresa":
                $foto4 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta4 == "papaya":
                $foto4 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta4 == "manzana":
                $foto4 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }

        switch ($fruta5) {
            case $fruta5 == "mango":
                $foto5 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta5 == "banana":
                $foto5 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta5 == "piña":
                $foto5 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta5 == "naranja":
                $foto5 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta5 == "fresa":
                $foto5 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta5 == "papaya":
                $foto5 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta5 == "manzana":
                $foto5 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }

        switch ($fruta6) {
            case $fruta6 == "mango":
                $foto6 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta6 == "banana":
                $foto6 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta6 == "piña":
                $foto6 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta6 == "naranja":
                $foto6 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta6 == "fresa":
                $foto6 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta6 == "papaya":
                $foto6 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta6 == "manzana":
                $foto6 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }


        switch ($fruta7) {
            case $fruta7 == "mango":
                $foto7 = "https://exoticfruitbox.com/wp-content/uploads/2015/10/mango.jpg";
                break;
            case $fruta7 == "banana":
                $foto7 = "https://www.suat.com.uy/upcms/thumbs/648x365/////novedades/imagen/955_big.jpg";
                break;
            case $fruta7 == "piña":
                $foto7 = "https://www.maxionline.ec/wp-content/uploads/2020/08/pinia-el-sabor-de-la-frecura.jpg";
                break;
            case $fruta7 == "naranja":
                $foto7 = "https://www.cuerpomente.com/medio/2020/10/21/naranja_b3c2dbbc_1200x1200.jpg";
                break;
            case $fruta7 == "fresa":
                $foto7 = "https://www.eluniversal.com.mx/sites/default/files/2020/03/12/fresas.jpg";
                break;
            case $fruta7 == "papaya":
                $foto7 = "https://agrorigen.org/wp-content/uploads/2021/01/Papaya-Melona-600x385.jpg";
                break;
            case $fruta7 == "manzana":
                $foto7 = "https://2.bp.blogspot.com/-DWSOPpgvRuw/VtRjHRS2emI/AAAAAAABgFM/Qzr1TuyhYyg/s1600/ruydecoraciones.jpg";
                break;
        }

        $salpicones = array(
            array("nombre" => $fruta1, "foto" => $foto1),
            array("nombre" => $fruta2, "foto" => $foto2),
            array("nombre" => $fruta3, "foto" => $foto3),
            array("nombre" => $fruta4, "foto" => $foto4),
            array("nombre" => $fruta5, "foto" => $foto5),
            array("nombre" => $fruta6, "foto" => $foto6),
            array("nombre" => $fruta7, "foto" => $foto7),
        );
    }

    ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($salpicones as $salpicon) : ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo ($salpicon["foto"]) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ($salpicon["nombre"]) ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>