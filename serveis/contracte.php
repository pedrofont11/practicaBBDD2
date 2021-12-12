<?php
//require perqué el servei depen de la classe
include_once "db.php";
require "./classes/contracte.php";

function addContracte($nomUsuari,$dataAlta,$idTipusContracte){
    $connexio = dbConnect();  
    //volem rebre les dades del contracte
    $query = "insert into contracte values (DEFAULT,'".$dataAlta."','".$idTipusContracte."','".$nomUsuari."');";
    //Substituim els valor per les variables, la paraula default es per l'idContracte, el qual s'autoincrementarà tot sol.
    mysqli_query($connexio, $query);
    dbClose($connexio);
}    

?>