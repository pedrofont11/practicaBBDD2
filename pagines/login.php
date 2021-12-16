<html>
    <head>
        <style>
            .login{
            font-family: Avenir, sans-serif;
            }

            .container{
            width: 80%;
            max-width: 1024px;
            margin: auto;
            }

            #form{
            display: flex;
            flex-direction: column;
            }

            input{
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }

            .button{
            color: #fff;
            background-color: #0069d9;
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
            width: 100px;
            }

            .button:hover{
            cursor: pointer;
            }
        </style>
    </head>
    <body>
    <div class="login">
    <div class="container">
      <h1>
        Connexió
      </h1>
      <section id="form">
        <form action="" method="post">
            <input type="text" name="usuari" placeholder="Nom d'usuari">
            <input type="password" placeholder="Contrassenya">
            <input type="submit" name="button" class="button" value="Validar"/>
        </form> 
        <?php
        if(isset($_POST['usuari'])){
            header("Location: home.php?nomUsuari=".$_POST['usuari']);
        }
        ?>                    
      </section>
    </div>
    </body>
</html>