<?php
session_start();
include("database.php");

$sql = "INSERT INTO clienti (cognome, nome, email, password)
VALUES ('".$_POST["surname_reg"]."','".$_POST["name_reg"]."','".$_POST["email_reg"]."','".$_POST["psw_reg"]."')"; // scrivo sul DB questi valori
    

if ($conn->query($sql) === TRUE) {
  echo "Benvenuto sul tuo nuovo profilo.<br>
        Prenota il tuo posto nel <a href=\"index.php\">Calendario</a>"
      ;
} elseif ($_POST["email_reg"]==$_SESSION["email"]);{
   echo "Esiste già una email indirizzata al tuo profilo"; 
}

$conn ->close();
?>