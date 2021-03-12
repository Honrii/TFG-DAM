<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/css/paginaPrincipal.css">
    <title>Pagina Principal</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home"><img id="logo" src="../../styles/img/logo.PNG" alt="" width="30" height="30"></a>
        <a href="../paginaHoteles/hoteles.php">HOTEL</a>
        <a href="../paginaCoches/coches.php">COCHE</a>
        <a href="#perfil">PERFIL</a>
        <a href="../loginRegister/login.php" style="float:right">Login</a>
        <a href="../loginRegister/register.php" style="float:right">Registro</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <section class="element1">
        <h1>ELEMENT 1</h1>
        <div id="inps">
            <form>
                <i class="fa fa-search" aria-hidden="true"></i><input type="text" id="t1" placeholder="Origen:">
                <!-- API Google Maps Buscador https://www.youtube.com/watch?v=43-OclfQ68I-->
                <input type="text" id="t2" placeholder="Destino:">
                <input type="date" id="t3" placeholder="Ida:" id="start" name="trip-start" value="2021-03-11"
                    min="2021-03-11" max="2023-03-11">
                <input type="date" id="t4" placeholder="Vuelta:" id="finish" name="trip-finish" value="2021-03-12"
                    min="2021-03-11" max="2023-03-11">
                <input type="number" id="t4" placeholder="Personas:">
                <!-- TODO: Hacer dropdown para saber el numero de adultos y niños que hay -->
                <input type="submit" value="Buscar">
            </form>
        </div>
    </section>

    <section class="element2">
        <h1>ELEMENT 2</h1>
    </section>

</body>

</html>