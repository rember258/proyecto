<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REM System</title>
    <link rel="icon" type="imagen/png" href="img/rem3.jpg">
</head>
<body>
    <?php

require_once 'login.php';
$conexion = new mysqli($hn, $un, $pw, $db);
if ($conexion->connect_error) die ("Fatal error");

if(isset($_POST['gmail']) && isset($_POST['pass']))
{
    $gmail= mysql_fix_string($conexion, $_POST['gmail']);
    $pass =($_POST['pass']);

    $query = "SELECT * FROM users WHERE gmail='$gmail' AND pass='$pass'";

    $result = $conexion->query($query);
    if ($result->num_rows >= 1)
       Echo "<center><br><br><br><br><br><br><br><br>
    <div class='imagen'><img src='plan.png'></div><br>

    <a href='plan.php'>Adquiere tu nuevo plan</a>
    </center>";  
    else
    echo"<center><br><br><br><br><br>
                Usuario o contraseña que ingresaste es incorrecta<br><br>
                <div class='imagen'>
               <img src='alerta.jpg'>
               </div><br>
                 <a href='registro.php'>Crear cuenta nueva</a>
              </center><br>";

 }else{
    echo' <center><br><br><br><br>
                                  <h4> Iniciar  sesión </h4> 
               <div class="imagen">
               <img src="login.png">
               </div>
 <form action="index.php" method="post"><br>

 <input class="texto" type="text" name="gmail" placeholder="Usuario"><br><br>
 <input class="texto" type="password" name="pass" placeholder="Contraseña"><br><br>
 <input class="boton" type="submit" value="Iniciar Sesión"><br>
 </form></center>';

 echo '<center>
    <form action="registro.php" method="post"><br><br>
    Si no eres uasuario registrate <br>
<input class="boton" type="submit" value="Registrate Aqui"><br><br><br>';}




function mysql_fix_string($coneccion, $string)
{
    if (get_magic_quotes_gpc())
        $string = stripcslashes($string);
    return $coneccion->real_escape_string($string);
}
?>
<style>
body{
    margin:0;
    padding:0;
    background: url(descarga.jpg) no-repeat center fixed;
    background-size: cover;
    background-position: cenetr;
    font-family: sans-serif;
}
.imagen{
    
width:-180px;
height:-25px;
}
.texto{
margin: 0;
padding:0 20px;
background-color:#CAFCFD;
opacity:45;
text-align: center;
font-size:15px;
border-radius:10px;
width:180px;
height:25px;
}
.boton{
border:none;
outline:none;
width:150px;
height:30px;
background:#42C7FF ;
color:#000;
font-size:15px;
border-radius:10px;}

.h4{
margin: 0;
padding: 0 0 20px;
text-align:cenetr;
font-size:12px;
display: algerian;
}
.h6{
margin: 0;
padding: 0 0 20px;
text-align:cenetr;
font-size:12px;
display: algerian;
}


</style>
</body>
</html>