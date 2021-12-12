<?php
class Contracte{
    private $idContracte;
    private $dataAlta;
    private $idTipusContracte;
    private $nomUsuari;
    
    function __construct($idContracte,$dataAlta,$idTipusContracte,$nomUsuari){
        $this->idContracte = $idContracte;
        $this->dataAlta = $dataAlta;
        $this->idTipusContracte = $idTipusContracte;
        $this->nomUsuari = $nomUsuari;
    }
    #Gets i sets de les variables per la encapsulació
    //contracte
    function set_idContracte($idContracte) {
        $this->idContracte = $idContracte;
      }
    function get_idContracte() {
        return $this->idContracte;
      }
    //data alta
    function set_dataAlta($dataAlta) {
        $this->dataAlta = $dataAlta;
      }
    function get_dataAlta() {
        return $this->dataAlta;
      }  
    //idTipusContracte
    function set_idTipusContracte($idTipusContracte) {
        $this->idTipusContracte = $idTipusContracte;
      }
    function get_idTipusContracte() {
        return $this->idTipusContracte;
      }  
    //nom d'usuari  
    function set_nomUsuari($nomUsuari) {
        $this->nomUsuari = $nomUsuari;
      }
    function get_nomUsuari() {
        return $this->nomUsuari;
      }
}

?>