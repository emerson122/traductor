<html> 
      <head>
      <link rel="shortcut icon" href="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png">
      <link href="css/estilos.css" rel="stylesheet"/>         
      <title>Registro de Palabras</title>
   </head> 
 
      <body>
      <nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Traductor
    <a class="btn btn-danger" value="Ingresar" href="./index.php">Salir</a>
  </a>
</nav>
 
      <?php
      include './estilos/bootstrap.php';  
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "";
 
      // Nombre de la base de datos
      $baseDeDatos ="traductor";
 
      // Nombre de la tabla a trabajar
      $tabla = "palabras";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))){ 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }else{
            //echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }else{
            //echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
         $queryInsert = "INSERT INTO $tabla (palabra_spanish, palabra_english) VALUES ('".$_POST['españolForm']."', '".$_POST['inglesForm']."');";
 
         $resultInsert = mysqli_query($link, $queryInsert); 
 
         if($resultInsert)
         {
            echo "<p class='p-2 bg-success text-white'>Se ha Registrado la Palabra con Exito.</p> <br>";
         }else{
            echo "No se ingresaron los registros. <br>";
         }
       }
       $query = "SELECT Nombre, Apellidos FROM $tabla;";
       $result = mysqli_query($link, $query); 
       ?>
      <hr>
      <center>

<div class="panel panel-danger" style="width : 950px; heigth : 950px"  align="left">
  <div class="panel-heading"><h1><center>Registro de Palabras </center></h1></div> 
  <div class="panel-body">  
  <br><br>
  <form action="" method="post">
         Palabra en Español: <br><input type="text" name="españolForm" style="width : 700px; heigth : 800px" required> <br> <br>
         Traducción en Ingles: <br><input type="text" name="inglesForm" style="width : 700px; heigth : 800px" required> <br> <br>
         <input class="btn btn-success" type="submit" value="Guardar">
   </form>
</div>
</div>

   <div align="right">
   <img src="https://universidadalnus.com/wp-content/uploads/2020/03/UNIVERSIDAD-ALNUS-Primero-Nunca-comprometas-al-equipo-a-nada-sin-consultar-a-los-miembros-SUBTITULO-300x300.png"
   alt="" width="290" height="290"></div>
</center>
      </body> 
      </html>