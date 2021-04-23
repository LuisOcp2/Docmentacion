<?php 

class Contact {
    
    private $Nombre = $_POST['nombreC'];
    private $Numero = $_POST['numeroC'];
    
    
    public function __construct ($Nombre,$Numero)
{

$this -> Nombre = $Nombre;
$this -> Numero = $Numero;
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




?>