<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title></title>
</head>

<body>
<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

   if(isset($_POST['gmail']) && isset($_POST['pass']))
    {
        $gmail = $_POST['gmail'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO users VALUES('$gmail','$pass')";
        $result = $conexion->query($query);
        if (!$result) die ("Falló registro");

        echo "<center><br><br><br><br>
        Registro exitoso <br><br> 
        <a href='index.php'>Iniciar sesión</a>
        </center>";
      
    }else{
        echo' <center><br><br><br><br>
                           <h3>Regístrate</h3>
     <form action="registro.php" method="post"><pre><br><br> 
     <input class="texto" type="text" name="gmail" placeholder="usuario"><br>
     <input class="texto" type="text" name="pass" placeholder="contraseña"><br><br><br><br>
     <input class="boton" type="submit" value="Registrar"><br><br>
     </form>
             </center>';
} 
?>

</body>
</html>