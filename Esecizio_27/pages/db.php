<?php

//Istanziametno dati per la connessione al DB
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "votazioni";

//Connessione al DB
$connessione = mysqli_connect ($host, $user, $pass, $db) or die("Connessione non riuscita " . mysqli_connect_error() );

?>