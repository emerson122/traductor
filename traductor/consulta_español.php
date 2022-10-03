<html> 
    <head>
    <link rel="shortcut icon" href="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png">
    <link href="css/estilos.css" rel="stylesheet"/>         
    <title>Traductor Español a Inglés</title>
    </head> 
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Traductor
        <a class="btn btn-danger" value="Ingresar" href="./cosulta_especifica.php">Salir</a>
        </a>
    </nav>
    <?php
        include './estilos/bootstrap.php';
    ?>
    <hr>
    <center><div class="p-2 mb-2 bg-warning text-dark">Traductor de Español a Inglés</div></center><hr>

    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">
          <!--Card--->
          <center><div class="card border-dark mb-3" style="width: 25rem;" >
              <img class="card-img-top" src="./imagenes/Tarjeta_7.jpg" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Traducir de Español a Inglés</h5>
          <form  action="consulta_español.php" method="post">
               <!--Palabra en Español a Traducir:<br>-->
              <input type="text" name="palabra_traducir_espa" style="width : 200px; heigth : 200px" required><br><br>
              <input class="btn btn-success" type="submit" value="Traducir a Inglés">
          </form>              
            </div>
          </div></center>
          <!--End of the Card-->
        </th>  
      </tr>
    </thead>
  </table>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "traductor";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  //Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $traduccion_español = $_POST["palabra_traducir_espa"]; 

    $sql = "SELECT * FROM palabras where palabra_spanish = '$traduccion_español'";
    $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <center>
  <div class="card border-success mb-3" style="max-width: 25rem;">
  <div class="card-body">
  <?php
    while($row = $result->fetch_assoc()) {
      echo "<hr>";
      echo "<b>Código de Referencia:</b> " . $row["id"]. " <br>";    
      echo "<b>Palabra </b> " . $row["palabra_spanish"]. " ";
      echo "<b>traducida a inglés es </b> " . $row["palabra_english"]. " <br>";
      echo "<br>";    
    }
  ?>
    </div>
    </div></center>
  <?php
    } else {
  ?>
    <center>
    <div class="card border-danger mb-3" style="max-width: 25rem;">
    <div class="card-body">
  <?php    
    echo "Esta Palabra No Esta Registrada ó Está en Otro Idioma <br>";  
    echo "<a class='btn btn-dark' value='Ingresar' href='./insertar_datos.php'>Registrar Palabra</a>";
    
      }
    ?>


<?php
  $conn->close();
  }
  ?>
    </div>
    </div></center>
  </body> 
</html>