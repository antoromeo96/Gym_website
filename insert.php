<?php

$servername = "localhost";
$username = "root";
$password = "developer";
$dbname = "palestra";

$connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO eventi 
 (title, start_event, end_event) 
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>