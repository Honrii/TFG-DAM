<?php

require "connDB.php";


if (isset($_POST['regist'])) {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['pwd'];

    $sql = $conn->prepare("INSERT INTO usuarios (name, correo, pwd)VALUES ( ?, ?, ?)");
    $sql->bind_param("sss", $nom, $mail, $password);
    // $result = $conn->query($sql);

    $sql->execute();
    // if ($result)
    //     echo "<br> Se ha ejectudado el delete correctamente";

    // else
    //     echo "<br> ALGO NO FUNCIONA";
   //          closeConn($conn);
    //    //   header("Location: index.php");
}
