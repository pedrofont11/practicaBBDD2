<html>
    <head>
        <style>
            .row{
            font-family: Avenir, sans-serif;
            }
            .h1{
                font-size: 50px;
            }
            .container{
            width: 80%;
            max-width: 1024px;
            margin: auto;
            font-size: 30px;
            
            }
            .pro-qty{
                size: 500px;
            }
            .btn{
            color: white;
            background-color: gray;
            border-color: #0062cc;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            width: 150px;
            }
        </style>
    </head>
    <body>
    <section class="search-filter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="post" class="check-form" style="top: -300px;">
                            <h1>Realitzar un nou contracte</h1>
                            <div class="nomUsuari">
                                <div class="single-quantity">
                                    <p>Usuari</p>
                                    <div class="pro-qty"><input type="text" name="nomUsuari" placeholder="Introdueix el teu usuari" required></div>
                                </div>
                            </div>
                            <div class="datepicker">
                                <p>Data d'inici del contracte</p>
                                <div class="fecha"><input type="date" name="date1" class="datepicker-1" value="<?php echo date('Y-m-d'); ?>" disabled /> 
                            </div>
                            <div class="text">
                                <p>Selecciona el tipus de contracte:</p> 
                                    <?php
                                    require "./serveis/tipusContracte.php";                     
                                    $tipusContracte = getTipusContracte();            
                                    for ($i = 0; $i < count($tipusContracte); $i++) {
                                        ?>
                                        <div>
                                        <input type="radio" name="tipus" id="<?php echo $tipusContracte[$i]->get_tipusContracte() ?>" 
                                        value="<?php echo $i ?>" required>
                                        <label for="<?php echo $tipusContracte[$i]->get_tipusContracte() ?>"><?php 
                                        echo $tipusContracte[$i]->get_tipusContracte()." ".$tipusContracte[$i]->get_preu()."€"?></label>
                                        </div>
                                        <?php
                                    }         
                                    ?>   
                            <br>
                            <button type="submit" class="btn btn-primary mb-3">Nou Contracte</button>
                            
                        </form>
                        <?php
                        require "./serveis/contracte.php";
                        if(isset($_POST['nomUsuari'])){
                            $tipus = $tipusContracte[$_POST['tipus']]->get_idTipusContracte();
                            $import = $tipusContracte[$_POST['tipus']]->get_preu();
                            addContracte($_POST['nomUsuari'],date('Y-m-d'), $tipus, $import);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
    </html>