<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/styleUsuario.css" />
    <!-- SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <form action="login.php" method="post">
        <div class="form-box">
            <section class="left-box">
                <span>Bienvenido</span>
            </section>
            <section class="right-box">
                <span>Login</span>
                <form action="server.php" method="POST">
                    <input type="email" placeholder="Correo" name="mail" />
                    <input type="password" placeholder="Contraseña" name="pwd" />
                    <p><button type="submit" name="login">Login</button></p>
                </form>
                <a href="./register.php">Todavía no estás registrado, hazlo aquí!!</a>
            </section>
        </div>
    </form>


    <?php
    require_once('DB.php');

    $conn = DB::getInstance()->getConn();
    session_start();

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($mail) || !empty($pwd)) {
            // TODO Cambiar base de datos
            // $sql = "SELECT name, id FROM heroku_83c1bab7b4bbea2.usuarios WHERE name = '$username' AND pwd = '$password'";
            $sql = "SELECT name, id FROM users WHERE correo = '$mail' AND pwd = '$pwd'";
            var_dump($sql);
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Guardar datos de sesión
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['username'] = $row ['nombre'];
                    $_SESSION['id'] =  $row ['id'];
                }
                header('Location: ./perfil.php');
                
            } else {
                sweetalert2();
            }
        } else {
            sweetalert2();
        }
    }
    ?>

</body>

</html>