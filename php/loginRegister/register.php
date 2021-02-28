<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
        <link rel="stylesheet" href="../../styles/css/styleUsuario.css" />
    </head>
    <body>
        <form action="insert.php" method="post">
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
        
    </body>
</html>