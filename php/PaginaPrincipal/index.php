<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/css/paginaPrincipal.css">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

        <div class="row">
            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/08/28080927/assets-0000-0002-eyeem-27037945-109832422.jpg" alt="Card image cap">
                    <h3>¡Aprovecha el verano!</h3>
                    <p>¿Buscas un poco de sol y de arena? Tenemos las mejores escapadas de playa para ti. </p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2018/10/16094951/taxonomy-spa-3.jpg" alt="Card image cap">
                    <h3>Imagínate en un hotel con Spa</h3>
                    <p>Piensa en todas las posibilidades para relajarte cuando decidas viajar</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/05/17084659/islas-baleares-mallorca.jpg" alt="Card image cap">
                    <h3>Las islas siempre nos traen buenos recuerdos</h3>
                    <p>Las calas de baleares, dignas del paraíso, te están esperando para tus vacaciones</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img class="card-img-top" src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/05/27083310/home-page-es.jpeg" alt="Card image cap">
                    <h3>Descubre más artículos aquí</h3>
                    <p>Explora cientos de artículos y encuentra inspiración para tu próxima aventura</p>
                </div>
            </div>
        </div>

    </section>

    <section class="element2">
        <h1>ELEMENT 2</h1>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>