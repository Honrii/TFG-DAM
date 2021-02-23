<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/styleUsuario.css" />
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
            </section>
        </div>
    </form>


    <?php
    require_once('../connDB.php');
    

    require_once('./phpconJS.php');

    $username = $_POST['mail'];
    $password = $_POST['pwd'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($username) || !empty($password)) {
            // TODO Cambiar base de datos
            $sql = "SELECT name FROM users.usuarios WHERE name = '$username' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                echo "<script> alert('hola'); </script>";

                header('Location: ../PaginaPrincipal/index.php');
                var_dump($result);
                session_start();
                // Guardar datos de sesión
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
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