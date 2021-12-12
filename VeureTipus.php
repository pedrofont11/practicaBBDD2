<?php
    
    $connexio=mysqli_connect ("localhost","root","");//Ens connectam a la base de dades
    $bd=mysqli_select_db($connexio, "BD212");
    mysqli_set_charset($connexio,"utf8");


    $consulta = "select * from tipus_usuari;";
    //echo $consulta;
    $resultats=mysqli_query($connexio,$consulta);
    
    
    while($fila=mysqli_fetch_row($resultats)){
        
        //echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo "<br>";
    }
    
?>