<?php
class Factura{
    private $idFactura;
    private $dataFactura;
    private $import;
    private $idContracte;
    
    function __construct($idFactura,$dataFactura,$import,$idContracte){
        $this->idFactura = $idFactura;
        $this->dataFactura = $dataFactura;
        $this->import = $import;
        $this->idContracte = $idContracte;
    }
    #Gets i sets de les variables per la encapsulació
    //FACTURA
    //idFactura
    function set_idFactura($idFactura) {
        $this->idFactura = $idFactura;
      }
    function get_idFactura() {
        return $this->idFactura;
      }
    //data de pagament de la factura
    function set_dataFactura($dataFactura) {
        $this->dataFactura = $dataFactura;
      }
    function get_dataFactura() {
        return $this->dataFactura;
      }  
    //import de la factura
    function set_import($import) {
        $this->import = $import;
      }
    function get_import() {
        return $this->import;
      }  
    //id del contracte del propietari de la factura
    function set_idContracte($idContracte) {
        $this->idContracte = $idContracte;
      }
    function get_idContracte() {
        return $this->idContracte;
      }
}

?>