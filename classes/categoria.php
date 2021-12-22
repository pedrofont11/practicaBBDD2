<?php
class Categoria{
    private $idCategoria;
    private $nomCategoria;
    
    function __construct($idCategoria,$nomCategoria){
      $this->idCategoria = $idCategoria;
      $this->nomCategoria = $nomCategoria;
    }
    #Gets i sets de les variables per la encapsulació
    //contracte
    function set_idCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
      }
    function get_idCategoria() {
        return $this->idCategoria;
      }
    //data alta
    function set_nomCategoria($nomCategoria) {
        $this->nomCategoria = $nomCategoria;
      }
      function get_nomCategoria() {
        return $this->nomCategoria;
      }
}

?>