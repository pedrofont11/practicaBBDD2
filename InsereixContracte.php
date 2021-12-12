<?php
    $locuser=$_GET['nomUsuari'];
    $locdata=$_GET['date1'];
    $loctipusContracte=$_GET['tipusContracte'];
    //echo $locuser.", ".$locdata.", ".$loctipusContracte.";
    //aqui heu de fer un insert
    $cadena = "insert into contracte values (DEFAULT,'".$locdata."','".$loctipusContracte."','".$locuser."');";
    //Substituim els valor per les variables, la paraula default es per l'idContracte, el qual s'autoincrementarà tot sol.
    $con = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($con, "BD212");
    mysqli_query($con, $cadena);
    echo $cadena;


?>