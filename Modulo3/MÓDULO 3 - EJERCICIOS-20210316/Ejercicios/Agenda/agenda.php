<?php

class contact {
    
    private $Nombre;
    private $Numero;
    private $busqueda;
    
    
    public function __construct ($Nombre,$Numero,$busqueda)
{

$this -> Nombre = $Nombre;
$this -> Numero = $Numero;
$this -> busqueda = $busqueda;
}
public function setbusqueda ($busqueda)
{
    
    $this->busqueda = $busqueda;
    
}
public function getbusqueda(){
    
    return $this->busqueda;
    

    
}
public function setNombre ($Nombre)
{
    
    $this->Nombre = $Nombre;
    
}
public function getNombre(){
    
    return $this->Nombre;
    

    
}
public function setNumero ($Numero)
{
    
    $this->Numero = $Numero;
    
}
public function getNumero(){
    
    return $this->Numero;
    

    
}
}

class agenda {
    
    public $contacto = array(array("diego",3226182248),         array("Luis",3127657063),         array("aleja",3136225492),         array("Karen",3226182248),         array("camil"
        ,3234568732),         array("ana"
        ,3146224572),         array("gerar"
        ,3129873456),         array("anais"
        ,3167423456),         array("Valen"
        ,3226172345),         array("camuf"
        ,3136542742),         array("weed"
        ,3152464567),         array("lana"
        ,3237657084)     );

public function registrar ($contacto){
    
    $NC = $this->Nombre;
    $NTC = $this->Numero;
    
    array_push($contacto,$NC,$NTC);
    
    echo "su contacto".array_pop($contacto)."ah sido guardado";
    
 
 
 
 
    
    
    
    
}

public function listar ($contacto){
    $NumeroContacts = count($contacto);
            for ($row = 0 ;$row < $NumeroContacts; $row++){
                
                for($col = 0 ; $col <$NumeroContacts ; $col++){
            
                echo $contacto[$row][$col];
                 }
            
                } 
                
                
    
}
public function buscar($contacto)
 {
     
     
     $this->busqueda = $_POST['buscarN'];
     
     
     if(array_key_exists($this->busqueda)){
         
           echo array_search($this->busqueda,$contacto);
         
         
     }
     else{
         
         echo "el contacto".$this->busqueda."no existe";
     }
    
    
}
public function salud(){
    
    echo "hola";
    
}
}


?>