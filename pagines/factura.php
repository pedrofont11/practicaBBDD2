<html>
    <head>
        <style>
            .factura{
            font-family: Avenir, sans-serif;
            }
            h1{
                font-size: 50px;
            }
            .container{
            width: 80%;
            max-width: 1024px;
            margin: auto;
            }

            .mb-3{
            font-size: 30px;  
            
            }
        </style>
    </head>
    <body>
    <div class="factura">
    <div class="container">
        <h1>Factura Actual</h1>
        <div class="mb-3">
        <label for="dataPagament" class="form-label">Data del pagament</label>
        <?php
        require "../classes/factura.php";    
         //$dataF = get_dataFactura();
        ?>
        </div>
        <br>
        <div class="mb-3">
        <label for="import" class="form-label">Import pagat</label>
        </div>
        <br>
        <div class="mb-3">
        <label for="dataSegPagament" class="form-label">Data del següent pagament</label>   
        </div>
        <br>
    </div>
    </div>
    </body>
</html>