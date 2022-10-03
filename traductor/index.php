<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png">
   <link href="./estilos/estilos.css" rel="stylesheet">
  <title>Página Principal</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Traductor
  </a>
</nav><hr>
<div class="p-3 mb-2 bg-warning text-dark"><h1>Bienvido, ¿Estás listo para traducir?</h1></div><hr>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">
              <!--Card--->
      <center><div class="card border-info mb-3" style="width: 18rem;" >
          <img class="card-img-top" src="./imagenes/Tarjeta_1.jpg" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Diccionario General de Español e Inglés.</h5>
              <p class="card-text">Puedes consultar el Diccionario General de Español e Inglés en este presente apartado.</p>
              <a class="btn btn-primary" value="Ingresar" href="./diccionario_completo.php">Diccionario General</a>
        </div>
    </div></center>
    <!--End of the Card-->
      </th>
      <th scope="col">
         <!--Card--->
      <center><div class="card border-success mb-3" style="width: 18rem;">
          <img class="card-img-top" src="./imagenes/Tarjeta_2.jpg" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Traductor.</h5><br>
              <p class="card-text">Ingresa a nuestro traductor de Español e Inglés en este apartado.</p>
              <a class="btn btn-success" value="Ingresar" href="./cosulta_especifica.php">Traductor</a>
        </div>
    </div></center>
    <!--End of the Card-->
      </th>
      <th scope="col">
         <!--Card--->
      <center><div class="card border-danger mb-3" style="width: 18rem;">
          <img class="card-img-top" src="./imagenes/Tarjeta_3.jpg" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Registro de Palabras</h5>
              <p class="card-text">En caso de que no se encuentre una palabra puedes registrarla para que aparesca en el diccionario general.</p>
              <a href="./insertar_datos.php" class="btn btn-danger">Registrar Palabra</a>
        </div>
    </div></center>
    <!--End of the Card-->
      </th>      
    </tr>
  </thead>
</table>





</body>
</html>

<?php     
include './estilos/bootstrap.php';        
?>

