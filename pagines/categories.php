<?php
    session_start()
?>
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

            .categoria{
                border-radius: 6px;
    border: 1px solid blue;
    background: #a0b7ff;
            }

            .categoria:hover{
                cursor: pointer;
            }

            .div-categoria:hover:after{
           content: "Delete";
            }

        </style>
    </head>
    <body>
    <div class="main">
    <div class="container">
    <h1>Gestio de ses categories</h1>
    <form action="" method="post">
    <select class="form-control" name="idCategoria" id="sel1">
    <option disabled selected value> -- Categoria -- </option>
    <?php
                        include_once "../serveis/categories.php";
                        $categories = getCategoriesNotFav($_SESSION['usuari']);
                        foreach ($categories as $categoria){
                            //Imprimeix-me les opcions i agafa el valor de la clau                            
                            echo "<option value= ".$categoria->get_idCategoria()."> ".$categoria->get_nomCategoria()." "."</option>";
                            echo "<br>";
                        }                
                    ?>   
     </select>
     <button type="submit" name="btn" class="btn btn-primary mb-3">Afegir categoria</button>
                            <?php
                            if(isset($_POST['idCategoria'])){
                                addCategoriaFav($_POST['idCategoria'], $_SESSION['usuari']);
                                header("Refresh:0");
                            }
                            ?>   
    <div class="categories">
    <?php
    $userCategories = getCategoriesFav($_SESSION['usuari']);
    if(!empty($userCategories)){
    
                                        foreach ($userCategories as $categoria){
                                            ?>
                                        <div class="div-categoria">
                                        <input type="submit" class="categoria" name="categoria" value="<?php echo $categoria->get_nomCategoria() ?>" id="<?php echo $categoria->get_idCategoria() ?>">
                                 </div>
                               <?php
                            }         
                     }         
                ?>   
    <?php
    if(isset($_POST['categoria'])){
        $deleteCategoria = trovaCategoriaPerNom($userCategories, $_POST['categoria']);
        deleteCategoriaFav($deleteCategoria->get_idCategoria(), $_SESSION['usuari']);
        header("Refresh:0");
    }
    ?>
        </form>
    </div>
    </div>
    </div>
    </body>
</html>