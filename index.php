<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./styles/css/paginaPrincipal.css">
    <link rel="stylesheet" href="./styles/css/index.css">
    <!--  Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="./styles/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./styles/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./styles/img/favicon-16x16.png">
    <link rel="manifest" href="./styles/img/site.webmanifest">
    <link rel="mask-icon" href="./styles/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
 
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home"><img id="logo" src="./styles/img/logo.PNG" alt="" width="30" height="30"></a>
        <a href="./php/hoteles.php" id="btn-navbar">HOTEL</a>
        <a href="./php/coches.php" id="btn-navbar">COCHE</a>
        <a href="#perfil" id="btn-navbar">PERFIL</a>
        <a href="./php/login.php" style="float:right" id="btn-navbar">Login</a>
        <a href="./php/register.php" style="float:right" id="btn-navbar">Registro</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <section class="element1">
        <h1>ELEMENT 1</h1>
        <div id="inps">
            <form action="intencionBusqueda.php" method="post">
                <i class="fa fa-search" aria-hidden="true"></i><input type="text" id="t1" placeholder="Origen:"
                    name="origen">
                <!-- API Google Maps Buscador https://www.youtube.com/watch?v=43-OclfQ68I-->
                <input type="text" id="t2" placeholder="Destino:" name="destino">
                <input type="date" id="t3" placeholder="Ida:" id="start" name="trip-start" value="2021-03-11"
                    min="2021-03-11" max="2023-03-11">
                <input type="date" id="t4" placeholder="Vuelta:" id="finish" name="trip-finish" value="2021-03-12"
                    min="2021-03-11" max="2023-03-11">
                <input type="number" id="t4" placeholder="Personas:" name="personas">
                <!-- TODO: Hacer dropdown para saber el numero de adultos y niños que hay -->
                <input type="submit" value="Buscar" name="buscar">
            </form>
        </div>
        <div class="card-deck">
            <div class="card">
                <img src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/08/28080927/assets-0000-0002-eyeem-27037945-109832422.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">¡Aprovecha el verano! </h5>
                    <p>¿Buscas un poco de sol y de arena? Tenemos las mejores escapadas de playa para ti. </p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2018/10/16094951/taxonomy-spa-3.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Imagínate en un hotel con Spa </h5>
                    <p>Piensa en todas las posibilidades para relajarte cuando decidas viajar</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/05/17084659/islas-baleares-mallorca.jpg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Las islas siempre nos traen buenos recuerdos </h5>
                    <p>Las calas de baleares, dignas del paraíso, te están esperando para tus
                        vacaciones</p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_lfill,d_dummy.jpeg,f_auto,h_300,q_auto,w_300/mag/2019/05/27083310/home-page-es.jpeg"
                    class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Descubre más artículos aquí </h5>
                    <p>Explora cientos de artículos y encuentra inspiración para tu próxima aventura</p>
                </div>
            </div>
        </div>
    </section>

    <section id="section2">

        <h1>SECTION 2 TRIP</h1>

    </section>

    <!--<section>
        <h1>ELEMENT 2</h1>
        <div class="card-deck">
            <div class="card">
                <img src="https://imgcy.trivago.com/c_fill,d_dummy.jpeg,f_auto,h_258,q_auto,w_258/categoryimages/13/62/13628_v24.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Hoteles en Madrid </h5>
                    <p> 24.556 hoteles <b> Media: 78€ </b></p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_fill,d_dummy.jpeg,f_auto,h_258,q_auto,w_258/categoryimages/13/43/13437_v30.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Hoteles en Barcelona </h5>
                    <p> 24.838 hoteles <b> Media: 149€ </b></p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_fill,d_dummy.jpeg,f_auto,h_258,q_auto,w_258/categoryimages/13/44/13443_v39.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Hoteles en Benidorm </h5>
                    <p> 24.838 hoteles <b> Media: 149€ </b></p>
                </div>
            </div>
            <div class="card">
                <img src="https://imgcy.trivago.com/c_fill,d_dummy.jpeg,f_auto,h_258,q_auto,w_258/categoryimages/13/56/13561_v12.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title">Hoteles en Granada </h5>
                    <p> 5.484 hoteles <b> Media: 62€ </b></p>
                </div>
            </div>
        </div>    
    </section>

    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="../../styles/img/trivago.webp" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
            </div>
        </div>
    </div>
    <footer>
        <div class="container">

            <div class="row">
                <div class="col" style="margin-left: -5% !important;">
                    <p id="txt-suscribe">¿Quieres ofertas exclusivas de hoteles? ¡Suscríbete al boletín de noticias!</p>
                </div>
                <div class="col">
                    <form action="subscribe.php" style=" background: none;">
                        <input type="text" placeholder="Dirección de e-mail">
                        <input type="submit" value="Suscribirse">
                    </form>
                </div>
            </div>
    </footer>  -->

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

</html