<html>
    <head>
        <style>
            .main{
            font-family: Avenir, sans-serif;
            }

            .container{
            width: 80%;
            max-width: 1024px;
            margin: auto;
            }

            .option{
            padding: 5px 10px;
            background-color: rgba(0,0,0,.03);
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 10px;
            margin: 10px 0;
            text-align: center;
            }

            .option:hover{
            cursor: pointer;
            }

            .title-card{
            font-size: 14px;
            font-weight: lighter;
            }
        </style>
    </head>
    <body>
    <div class="main">
    <div class="container">
        <?php
         $nomUsuari = $_GET['nomUsuari'];  
         ?>
        <h1><?php echo $nomUsuari?></h1>
        <section class="option contracte">
            <div class="title-card">
                <h2>Ver contracte</h2>
            </div>
        </section>
        <section class="option nou-contracte">
            <div class="title-card">
                <h2 onclick="<?php echo 'text' ?>">Nou contracte</h2>
                        
            </div>
        </section>
        <section class="option factures">
            <div class="title-card">
                <h2>Ver factures</h2>
            </div>
        </section>
    </div>
</div>
    </body>
</html>