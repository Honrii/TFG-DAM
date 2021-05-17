<?php

require "connDB.php";


if (isset($_POST['regist'])) {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['pwd'];

  /*  $sql = $conn->prepare("INSERT INTO usuarios (name, correo, pwd)VALUES ( ?, ?, ?)");
    $sql->bind_param("sss", $nom, $mail, $password);
    

    $sql->execute();*/
  


    /*Check new user*/
    $sql_u = "SELECT * FROM users WHERE name='$nom'";
  	$sql_e = "SELECT * FROM users WHERE correo='$mail'";
  	$res_u = mysqli_query($sql_u);
  	$res_e = mysqli_query($sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	 // $name_error = "Sorry... username already taken"; 	
     echo "Nombre de usuario existente"
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
        $sql = $conn->prepare("INSERT INTO usuarios (name, correo, pwd)VALUES ( ?, ?, ?)");
        $sql->bind_param("sss", $nom, $mail, $password);
        
        $sql->execute();
  	}
    
}
