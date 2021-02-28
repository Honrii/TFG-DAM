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
                <input type="date" id="t3" placeholder="Ida:">
                <input type="date" id="t4" placeholder="Vuelta:">
                <input type="number" id="t4" placeholder="Personas:">
                <!-- TODO: Hacer dropdown para saber el numero de adultos y niños que hay -->
                <input type="submit" value="Buscar">
            </form>
            <div id="empresas">
                <h3>Comparamos varias webs de reserva al mismo tiempo</h3>
                <ul class="dealform-partners__wrapper"><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/626.png" alt="Booking.com"><span class="visuallyhidden">Booking.com</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/452_1.png" alt="Hotels.com"><span class="visuallyhidden">Hotels.com</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/395.png" alt="Agoda"><span class="visuallyhidden">Agoda</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/2420_1.png" alt="VRBO"><span class="visuallyhidden">VRBO</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/14.png" alt="Accor"><span class="visuallyhidden">Accor</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/634.png" alt="Trip.com"><span class="visuallyhidden">Trip.com</span></li><li class="partner"><img class="partner__logo" aria-hidden="true" src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos/582.png" alt="Viajes El Corte Ingles"><span class="visuallyhidden">Viajes El Corte Ingles</span></li><li class="partner"><p class="dealform-partners__text">Más de 100</p></li></ul>
            </div>
        </div>
    </section>

    <section class="element2">
        <h1>ELEMENT 2</h1>
    </section>

</body>

</html>