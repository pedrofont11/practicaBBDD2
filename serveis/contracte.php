<?php
//require perqué el servei depen de la classe
include_once "db.php";
include "./classes/contracte.php";
//require_once "./classes/contracte.php";

function addContracte($nomUsuari,$dataAlta,$idTipusContracte,$import){
    $connexio = dbConnect();  
    //volem rebre les dades del contracte
    $query = "INSERT INTO contracte VALUES (DEFAULT,'".$dataAlta."','".$idTipusContracte."','".$nomUsuari."');";
    //Substituim els valor per les variables, la paraula default es per l'idContracte, el qual s'autoincrementarà tot sol.
    mysqli_query($connexio, $query); 
    $id = getIdContracte($nomUsuari);
    //print_r($id);  
    //addFactura($id, $dataAlta, $import);
    dbClose($connexio);
}    
function getIdFactura($idContracte){
    $connexio = dbConnect();
    $query = "SELECT * FROM factura WHERE idContracte='$idContracte'";
    $resultats = mysqli_query($connexio, $query);
    $id= NULL; 
    while($fila=mysqli_fetch_array($resultats)){
        $id = $fila['idFactura'];       
    }  
    dbClose($connexio);
    return $id;
}

function getIdContracte($nomUsuari){
    $connexio = dbConnect();  
    //volem rebre les dades del contracte
    $query = "SELECT * FROM contracte WHERE nomUsuari='$nomUsuari'";
    //Substituim els valor per les variables, la paraula default es per l'idContracte, el qual s'autoincrementarà tot sol.
    $resultats = mysqli_query($connexio, $query);
    $id= NULL; 
    while($fila=mysqli_fetch_array($resultats)){
        $id = $fila['idContracte'];       
    }  
    dbClose($connexio);
    return $id;
}   

function estaActiu($dataAlta,$idTipusContracte){
    $connexio = dbConnect();
    if($idTipusContracte == "mensual"){

    }else{
        

    }

}

?>