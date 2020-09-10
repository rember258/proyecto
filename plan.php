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


    if(isset($_POST['titulo']) && isset($_POST['fecha'])&& isset($_POST['descripcion']))
    {
        $titulo= $_POST['titulo'];
        $fecha = ($_POST['fecha']);
        $decripcion = ($_POST['descripcion']);

        $query = "INSERT INTO plan VALUES('$titulo','$fecha','$decripcion')";
        $result = $conexion->query($query);
        if (!$result) die ("Nombre del Plan / La fecha tiene que ser diferente");

         echo "<center><br><br><br><br>
        Tu Registro fue agregado a la Base de Datos<br><br> 
        <a href='mostrar.php'>Mostrar tu Plan</a>
        </center>";  
    
   
   }
    echo'<center><br><br><br><br>
                                               <h3>SOLICITAR  TU  NUEVO  PLAN</h3><br>
           
    <form action="plan.php"method="post"><pre>
         <input class="texto"type="text" name="titulo"placeholder="Nombre del Plan"> <input class="texto" type="text" name="fecha"placeholder="Fecha"><pre>
          <textarea name="descripcion" cols="70" rows="15" wrap="off" placeholder="Solicita tu plan ?"></textarea><br><br>
          <input class="boton" type="submit" value="GUARDAR PLAN" >
          </cenetr>';

   
   
     
?>
<style>
body{
    margin:0;
    padding:0;
    background: url(fondoplan.png) no-repeat center fixed;
    background-size: cover;
    background-position: cenetr;
    font-family: sans-serif;
    }
    
.texto{
margin: 0;
padding:0 20px;
background-color:# 3b4652;
opacity:45;
text-align: center;
font-size:12px;
border-radius:10px;
width:180px;
height:25px;
}
.boton{
border:none;
outline:none;
width:200px;
height:30px;
background:#42C7FF ;
color:#000;
font-size:10px;
border-radius:10px;}
}
</style>
</body>
</html>