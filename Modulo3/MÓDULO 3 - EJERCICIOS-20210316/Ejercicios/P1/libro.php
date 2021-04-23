<?php

class libro {
 
 private $titulo1;
 private $autor1;
 private $paginas1;
 private $titulo2;
 private $autor2;
 private $paginas2;
 
 
 
public function __construct ($titulo1,$autor1,$paginas1,$titulo2,$autor2,$paginas2)
{

$this -> titulo1 = $titulo1;
$this -> autor1 = $autor1;
$this -> paginas1 = $paginas1;
$this -> titulo2 = $titulo2;
$this -> autor2 = $autor2;
$this -> paginas2 = $paginas2;
}
public function settitulo1 ($titulo1)
{
    
    $this->titulo1 = $titulo1;
    
}
public function gettitulo1(){
    
    return $this->titulo1;
    
}

public function setautor1 ($autor1)
{
    
    $this->autor1 = $autor1;
    
}
public function getautor1(){
    
    return $this->autor1;
    
}

public function setpaginas1 ($paginas1)
{
    
    $this->paginas1 = $paginas1;
    
}
public function getpaginas1(){
    
    return $this ->paginas1;
    
}


public function settitulo2 ($titulo2)
{
    
    $this->titulo2 = $titulo2;
    
}
public function gettitulo2(){
    
    return $this->titulo2;
    
}

public function setautor2 ($autor2)
{
    
    $this->autor2 = $autor2;
    
}
public function getautor2(){
    
    return $this->autor2;
    
}

public function setpaginas2 ($paginas2)
{
    
    $this->paginas2 = $paginas2;
    
}
public function getpaginas2(){
    
    return $this ->paginas2;
    
}
public function op()
{
    if ($this->paginas1 > $this->paginas2) {
        // code...
    
echo "el numero de paginas del libro 1 es mayor <br>";
echo "el libro ".$this-> titulo1." del autor ". $this -> autor1. " tiene ". $this -> paginas1. " paginas " ;
    
    }else {
       echo "el numero de paginas del libro 2 es mayor <br>";
       echo "el libro ".$this-> titulo2." del autor ". $this -> autor2. " tiene ". $this -> paginas2. " paginas " ; 
        
    }    
    
}




}



?>