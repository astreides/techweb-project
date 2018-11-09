<?php
//action

$req = $bdd->query('INSERT INTO `users` (username, email, password, name, lastname,telnummer, birthdate, delivery_adress_id) VALUES (\''.$_POST["nlogin"].'\',\''.$_POST["mail"].'\',\''.$_POST["npassword"].'\',\''.$_POST["prenom"].'\',\''.$_POST["nom"].'\',\''.$_POST["tel"].'\',\''.$_POST["age"].'\',\''.$_POST["adresse"].'\')');

?>
