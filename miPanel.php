<?php
#crear session
session_start();

#Session diferente a Vacio
if($_SESSION["user"]=="" || $_SESSION["user"]== null){
    header("Location:index.php");
}

$idioma= "spanish";
if(isset($_GET['lang'])){
    setcookie("lang",$_GET['lang'],time()+(60*60*24));
    $idioma = $_GET['lang'];
}else{
    if(isset($_COOKIE['lang'])){
        $idioma = $_COOKIE['lang'];
    }
}
?>

<html>
    <head></head>
    <body>
        <h1>Panel Principal</h1>
        <h2>Bienvenido Usuario: <?php echo $_SESSION["user"];?></h2>
        <a href="mipanel.php?lang=spanish">Español </a>
        <a href="mipanel.php?lang=english">English</a>
        <a href="cerrarSession.php">Cerrar Sesion</a>

        <?php   
                $bloc="";
                if($idioma=="english"){
                    echo "<h3>  Lista de productos  </h2>";
                    $bloc="categorias_en.txt";
                } else if($idioma=="spanish"){
                    echo "<h3>  Product list  </h3>";
                    $bloc="categorias_es.txt";
                }

                $doc = fopen($bloc,"r");
                while(!feof($doc)){ 
                    $datos = fgets($doc);
                    echo $datos . "<br>"; 
                }
                fclose($doc);
            ?>
    </body>
</html>