<html>
    <head>
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
                                <input type="date" name="date1" class="datepicker-1" value="<?php echo date('Y-m-d'); ?>" disabled/> 
                            </div>
                            <br> 
                            Selecciona el tipus de contracte:
                            <br>
                                    <?php
                                    require "./serveis/tipusContracte.php";                     
                                    $tipusContracte = getTipusContracte();            
                                    for ($i = 0; $i < count($tipusContracte); $i++) {
                                        ?>
                                        <div>
                                        <input type="radio" name="tipus" id="<?php echo $tipusContracte[$i]->get_tipusContracte() ?>" 
                                        value="<?php echo $tipusContracte[$i]->get_idTipusContracte() ?>" required>
                                        <label for="<?php echo $tipusContracte[$i]->get_tipusContracte() ?>"><?php 
                                        echo $tipusContracte[$i]->get_tipusContracte()." ".$tipusContracte[$i]->get_preu()."€"?></label>
                                        </div>
                                        <?php
                                    }         
                                    ?>   
                            <br>
                            <br>
                            <input type="submit" name="button" class="button" value="Nou contracte"/>
                        </form>
                        <?php
                        require "./serveis/contracte.php";
                        if(isset($_POST['nomUsuari'])){
                            addContracte($_POST['nomUsuari'],date('Y-m-d'),$_POST['tipus']);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
    </html>