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
            text-align: left;
                width: 30%;
                height: 40px;
                font-size: 16px;
                font-family: Avenir, sans-serif;
                font-weight: 400;
            }

            .option:hover{
            cursor: pointer;
            }
        </style>
    </head>
    <body>
    <div class="main">
    <div class="container">
    <form method="post">
        <?php
        session_start();
        $nomUsuari = $_SESSION['usuari'];   
        ?>
        <h1>Menu principal de <?php echo $nomUsuari?></h1>
            <input type="submit" name="button1"
                   class="option" value="Contractar un plan" />
                   <br>
            <input type="submit" name="button2"
                   class="option" value="Afegir categories favorites" />                 
        </form>
        <?php
        if(isset($_POST['button1'])){
            header("Location: ../FormulariContracte.php");
        }
        if(isset($_POST['button2'])){
            header("Location: categories.php");
        }
        ?>
    </div>
    </div>
    </body>
</html>