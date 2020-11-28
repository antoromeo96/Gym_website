<?php
session_start();
include("database.php");

$_SESSION['email'] = $_POST['email'];
$_SESSION['psw'] = $_POST['psw'];

$sql = "SELECT * FROM clienti WHERE email='".$_POST['email']."' AND password='".$_POST['psw']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Ti sei loggato con successo.<br>
        Vai al <a href=\"index.php\">calendario</a>";
  }
} else {
  echo "Non ti sei loggato con successo";
}
$conn->close();
?>