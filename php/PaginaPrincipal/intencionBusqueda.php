<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../styles/css/paginaPrincipal.css">
    <link rel="stylesheet" href="../../styles/css/index.css">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $fecha_inicio = $_POST["trip-start"];
        $fecha_fin = $_POST["trip-finish"];
        $personas = $_POST["personas"];

        echo "Origen: " . $origen . "Destino: " . $destino . "fecha_inicio: " . $fecha_inicio . "fecha_fin: " . $fecha_fin . "personas: " . $personas;

        /* if (empty($_POST["trip-start"]) || strrev($_POST['trip-start']) < date("Y-m-d") || strrev($_POST['trip-finish']) < date("Y-m-d") {

        } */
    }

    $ciudadLatLon = file_get_contents('https://api.opentripmap.com/0.1/en/places/geoname?name=' . $destino . '&apikey=5ae2e3f221c38a28845f05b6da2f890cd683391e44c61c06586b4642');
    $ciudadLatLon = json_decode($ciudadLatLon, true);
    var_dump($ciudadLatLon);

    ?>

</body>

</html>