<?php
//require perqué el servei depen de la classe
include_once "db.php";
require_once "../classes/categoria.php";
require_once "contracte.php";

function getCategories(){
    $connexio = dbConnect();                       
    $resultats=mysqli_query($connexio,"select * from categoria;");
    $categories = array(); //cream un array buit de tipus de contractes
    while($fila=mysqli_fetch_array($resultats)){
        $categoria = new Categoria($fila['idCategoria'], $fila['nomCategoria']);
        $categories[] = $categoria;             
    }   
   dbClose($connexio);
    return $categories;
}

function deleteCategoriaFav($idCategoria, $nomUsuari){
    $idContracte = getIdContracte($nomUsuari);
    $connexio = dbConnect();  
    $query = "DELETE FROM r_categoria_favorita WHERE idContracte = '".$idContracte."' AND idCategoria = '".$idCategoria."'";
    mysqli_query($connexio, $query); 
    dbClose($connexio);
}

function addCategoriaFav($idCategoria, $nomUsuari){
    $idContracte = getIdContracte($nomUsuari);
    $connexio = dbConnect();  
    $query = "INSERT INTO r_categoria_favorita VALUES ('".$idContracte."','".$idCategoria."');";
    mysqli_query($connexio, $query); 
    dbClose($connexio);
}

function getCategoriesFav($nomUsuari){
    $idContracte = getIdContracte($nomUsuari);
    $connexio = dbConnect();  
    $query = "SELECT * FROM r_categoria_favorita WHERE idContracte='$idContracte'";
    $categories = getCategories();
    $resultats=mysqli_query($connexio, $query); 
    $userCategories = array(); //cream un array buit de tipus de contractes
    while($fila=mysqli_fetch_array($resultats)){
        $userCategories[] = trovaCategoriaPerId($categories, $fila['idCategoria']);             
    }   
    dbClose($connexio);
    return $userCategories;
}

function getCategoriesNotFav($nomUsuari){
    $categoriesFav = getCategoriesFav($nomUsuari);
    $categories = getCategories();
    foreach ($categoriesFav as $categoria){
        $key = array_search($categoria, $categories); 
        unset($categories[$key]);
    }
    return $categories;
}

function trovaCategoriaPerId($array, $id){
    foreach ( $array as $element ) {
        if ( $id == $element->get_idCategoria() ) {
            return $element;
        }
    }
    return false;
}

function trovaCategoriaPerNom($array, $nom){
    foreach ( $array as $element ) {
        if ( $nom == $element->get_nomCategoria() ) {
            return $element;
        }
    }
    return false;
}


?>