<?php
$servername = "localhost";
$username = "root";
$password = "developer";
$dbname = "palestra";


if(isset($_POST["id"]))
{
 $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $query = "
 DELETE from eventi WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>