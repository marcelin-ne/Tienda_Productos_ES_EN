<?php
session_start();

if(isset($_POST["nombre"])){
    $_SESSION['user'] = $_POST["nombre"];
    $_SESSION['password'] = $_POST["clave"];
    //Si a cookies
    if(isset($_POST["checkRemerberme"])){
            setcookie("c_user", $_POST["nombre"], 0);
            setcookie("c_password", $_POST["clave"], 0);
            setcookie("c_save", $_POST["checkRemerberme"], 0);
    //No a cookies
    }else if(!isset($_POST["checkRemerberme"])){
            //Vaciamos el valor de la cookie
            setcookie("lang","",0);
            setcookie("c_user", "", 0);
            setcookie("c_password", "", 0);
            setcookie("c_save","",0);
        }
    header("Location:mipanel.php");
}else{
    header("Location:index.php");
}

?>