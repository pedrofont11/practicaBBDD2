<?php
    //Lida Amengual
    $locuser=$_GET['usuari'];
    $locpassword=$_GET['password'];
    $locnom=$_GET['nom'];
    $locllinatges=$_GET['llinatges'];
    $locTipusUsuari=$_GET['idTipusUsuari'];

    //echo $locuser." ".$locpassword." ".$locnom." ".$locllinatges." ".$locTipusUsuari;
    //aqui heu de fer un insert
    $cadena = "insert into usuari values ('".$locuser."','".$locpassword."', '".$locnom."', '".$locllinatges."', '".$locTipusUsuari."');";
    //Substituim els valor per les variables

    $connexio=mysqli_connect ("localhost","root","");//Ens connectam a la base de dades
    $bd=mysqli_select_db($connexio, "BD212");

    mysqli_query($connexio,$cadena);//Inserta realment la fila
    echo $cadena;


?>