<?php           
            session_start();
            $connexio=mysqli_connect ("localhost","root","");//Ens connectam a la base de dades
            $bd=mysqli_select_db($connexio, "BD212");
                       
            $locuser=$_POST['user'];
            $locpassword=$_POST['pass'];

            $consulta="SELECT contrasenya FROM Usuari WHERE nomUsuari='".$locuser."';";  
            
            //select contrasenya from usuari where nomUsuari="malida"
            $resultats=mysqli_query($connexio,$consulta);
            //echo $locpassword;
            
            $contrasenya_ficada="";
            
            while ($fila=mysqli_fetch_array($resultats,MYSQLI_ASSOC)){// Guarda dins l'array fila, el resultat de la consulta
                $contrasenya_ficada=$fila['contrasenya']; // Fic a la variable contrasenya ficada el camp de l'array que correspon a contrasenya
            }   

            if ($contrasenya_ficada==""){
                echo "El nom d'usuari no existeix";
            }else{

                if ($contrasenya_ficada==$locpassword){
                    //echo "Cap endins";
                    $_SESSION['usuari']=$locuser;
                    $host=$_SERVER['HTTP_HOST'];
                    $ruta=rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $url = "http://$host/$ruta/pagines/home.php";   //Calcul la ruta on vull redirigir
                    //var_dump($_SESSION);
                    header("Location: ".$url);  //Redirigesc
                }else{
                    echo "La contrasenya no és correcta";
                }
            }
                            
        ?>