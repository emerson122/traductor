<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png">
    <title>Diccionario General</title>
    <link href="css/estilos.css" rel="stylesheet"/>
</head>

<body">
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="http://2.bp.blogspot.com/-2KuWJLgDasg/T5nJvxh69dI/AAAAAAAAIXE/n8EQ2n6yjcY/s1600/Google+Translate.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Traductor
    <a class="btn btn-danger" value="Ingresar" href="./index.php">Salir</a>
  </a>
</nav>
<br><center><p class="p-2 bg-primary text-white">Diccionario de Español e Inglés</p></center>
</body>

</html>

<?php     
include './estilos/bootstrap.php';      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traductor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, palabra_spanish, palabra_english FROM Palabras";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<hr>";
    echo "<b>Código: de Referncia</b> " . $row["id"]. " <br>";    
    echo "<b>Palabra en Español:</b> " . $row["palabra_spanish"]. " <br>";
    echo "<b>Palabra en Inglés:</b> " . $row["palabra_english"]. " <br>";
    echo "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();      
           

?>