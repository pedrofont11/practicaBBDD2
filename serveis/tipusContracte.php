<?php
//require perqué el servei depen de la classe
include_once "db.php";
require "./classes/tipusContracte.php";

function getTipusContracte(){
    $connexio = dbConnect();                       
    $resultats=mysqli_query($connexio,"select * from tipus_contracte;");
    $tipusContractes = array(); //cream un array buit de tipus de contractes
    while($fila=mysqli_fetch_array($resultats,MYSQLI_ASSOC)){
        $tipusContracte = new TipusContracte($fila['idTipusContracte'], $fila['tipusContracte'], $fila['preu']);
        //per cada linea en la base de dades cream un nou objecte TipusContracte
        $tipusContractes[] = $tipusContracte;             
    }   
   dbClose($connexio);
    return $tipusContractes;
} 



?>