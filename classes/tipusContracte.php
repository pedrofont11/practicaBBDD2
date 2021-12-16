<?php

class TipusContracte{
    private $idTipusContracte;
    private $tipusContracte;
    private $preu;
    
    function __construct($idTipusContracte,$tipusContracte,$preu){
        $this->idTipusContracte = $idTipusContracte;
        $this->tipusContracte = $tipusContracte;
        $this->preu = $preu;
    }
    #Gets i sets de les variables per la encapsulació
    //idTipusContracte
    function set_idTipusContracte($idTipusContracte) {
        $this->idTipusContracte = $idTipusContracte;
      }
    function get_idTipusContracte() {
        return $this->idTipusContracte;
      }
    //tipus contracte
    function set_tipusContracte($tipusContracte) {
        $this->tipusContracte = $tipusContracte;
      }
    function get_tipusContracte() {
        return $this->tipusContracte;
      }  
    //preu
    function set_preu($preu) {
        $this->preu = $preu;
      }
    function get_preu() {
        return $this->preu;
      }  
}

?>