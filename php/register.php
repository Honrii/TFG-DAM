<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
        <link rel="stylesheet" href="../styles/css/styleUsuario.css" />
    </head>
    <body>
        <form action="register.php" method="post">
            <div class="form-box">
                <section class="left-box">
                    <span>Bienvenido</span>
                </section>
                <section class="right-box">
                    <span>Registro</span>
                    <form action="server.php" method="POST">
                        <input type="text" placeholder="Nombre" name="nom"/>
                        <input type="email" placeholder="Correo" name="mail"/>
                        <input type="password" placeholder="Contraseña" name="pwd"/>    
                        <p><button type="submit" name="regist">Registrarse</button></p>
                    </form>
                    <a href="./login.php"> Ya tienes login, logueate aquí</a>
                </section>
            </div>
        </form>
        
        <?php

        require_once("./DB.php");
        $conn = DB::getInstance()->getConn();

        $name = $_POST['nom'];
        $mail = $_POST['mail'];
        $password = $_POST['pwd'];
        // $passHash = password_hash($password, PASSWORD_BCRYPT)
        $name = $conn->real_escape_string($name);
        $mail = $conn->real_escape_string($mail);
        $password = $conn->real_escape_string($password);
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($name) || !empty($mail) || !empty($password)) {
                // $query = "INSERT INTO heroku_83c1bab7b4bbea2.usuarios (nombre, correo, pwd) VALUES ('$name', '$mail', '$password')";
                $query = "INSERT INTO users (name, correo, pwd) VALUES ('$name', '$mail', '$password')";
                var_dump($query);
                $result = $conn -> query($query);
                echo "<a href=\"login.php\"> IR AL LOGIN </a>";
            } else {
                sweetalert2();
            }
        }
        ?>


        
    </body>
</html>