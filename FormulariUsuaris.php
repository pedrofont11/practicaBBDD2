<html>
    <! –– Lida Amengual ––> 
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">    
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Filmant</h1>
              <p class="lead">Alta d'usuaris</p>
            </div>
          </div>

        <div class="container">
            <form action="InsereixUsuaris.php" method="get">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Usuari</span>
                    </div>
                    <input type="text" class="form-control" placeholder="usuari" name="usuari" aria-label="usuari" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                    </div>
                    <input type="password" class="form-control"  name="password" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nom</span>
                    </div>
                    <input type="text" class="form-control" placeholder="nom"  name="nom" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Llinatges</span>
                    </div>
                    <input type="text" class="form-control"  name="llinatges" placeholder="llinatges"  aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"  id="basic-addon1"> Tipus d'usuari: &nbsp </label>
                    <select class="form-control" name="idTipusUsuari" id="sel1">
                    <?php
                        
                        //Ens connectam a la base de dades
                        $connexio=mysqli_connect ("localhost","root","");
                        $bd=mysqli_select_db($connexio, "BD212");
                        mysqli_set_charset($connexio,"utf8");
                    
                        //Demana a la base de dades quins tipus d'usuari hi ha
                        $consulta = "select * from tipus_usuari;";                        
                        $resultats=mysqli_query($connexio,$consulta);
                        
                        //Mentre hi hagi valors a l'array dels tipus d'usuari
                        while($fila=mysqli_fetch_array($resultats,MYSQLI_ASSOC)){
                            //Imprimeix-me les opcions i agafa el valor de la clau                            
                            echo "<option value= ".$fila['idTipusUsuari']."> ".$fila['tipusUsuari']." "."</option>";
                            echo "<br>";
                        }                  
                                               
                    ?>   
                    </select>
                    </div>
                
                </div>
                <input type="submit" class="input-group mb-3"  value ="Dona'm d'alta">
           
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>;