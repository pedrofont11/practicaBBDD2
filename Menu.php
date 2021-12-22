<html>
    <! –– Lida Amengual ––> 
    <head>      
        <meta charset="utf-8">    
    </head>
    <body>
    <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Filmant</h1>
              <p class="lead"> 
              
                <?php 
                    session_start();
                    //var_dump($_SESSION);
                    echo "Benvingut, ".$_SESSION['usuari'];                
              ?>
              </p>
              <form action="Consulta factures.php" method="get"> 
                <input type="submit" name="BotoFactures" value="Consulta les teves factures">
              </form>
                <div>
                <form action="ActualitzaUsuaris.php" method="get"> 
                    <input type="submit" name="BotoActualitzaUsuaris" value="Actualitza les teves dades">
                </form>
                </div>


            </div>
          </div>


    </body>

    </html>
    