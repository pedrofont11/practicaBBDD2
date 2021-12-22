<?php 
#Aquí farem la connexio a la base de dades
function dbConnect(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "BD212";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function dbClose($conn){
    $conn -> close();
}

?>