<?php
//require perqué el servei depen de la classe
include_once "db.php";

function addFactura($idContracte, $dataFactura, $import){
    $connexio = dbConnect();  
    //volem rebre les dades del contracte
    $query = "insert into factura values (DEFAULT,'".$dataFactura."','".$import."','".$idContracte."');";
    //Substituim els valor per les variables, la paraula default es per l'idContracte, el qual s'autoincrementarà tot sol.
    mysqli_query($connexio, $query);
    dbClose($connexio);
}    

?>