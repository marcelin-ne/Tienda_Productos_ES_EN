<?php
#Made By: Marcelinne Tarea 1 de Aplicaciones Web 
#Variables 
$c_user="";
$c_password="";
$c_band=false;

#Set Cookie
if (isset($_COOKIE["c_user"])) {
    $c_user=$_COOKIE["c_user"];
    $c_password=$_COOKIE["c_password"];
    $c_band=true;
}
?> 

<!DOCTYPE html>
<head>
    <title>Login </title> <!-- Titulo de la pagina -->
</head>
        <body>
            <h1> LOGIN </h1>
            <form method="POST" action="ingreso.php">
                <fieldset>
                Usuario*: <br>
                <br>
                <input type="text" name ="nombre" value="<?php if($c_band){echo $c_user;}else{echo "";} ?>"/><br>
                <br>
                Password*: <br>
                <br/>  
                <input type="password" name ="clave" value="<?php if($c_band){echo $c_password;}else{echo "";} ?>"/><br>
                <br>
                <input type="checkbox" name="checkRemerberme" <?php if($c_band){echo "checked";}?>>Remember Me </input><br>
                <br>
                <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </body>

</html>