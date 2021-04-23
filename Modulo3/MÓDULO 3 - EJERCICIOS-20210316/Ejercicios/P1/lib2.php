<?php
 
class libroAC{
  
  private $autor;
  private $titulo;
  private $paginas;
  
  public function _construct($autor,$titulo,$paginas)
  {
    $this->autor = $autor;
    $this->titulo = $titulo;
    $this->paginas = $paginas;
    
    
  }
public function getautor()
    {
        return $this->autor;
    }
    public function setautor($autor)
    {
        $this->autor = $autor;
    }
public function gettitulo()
    {
        return $this->titulo;
    }
    public function settitulo($titulo)
    {
        $this->titulo = $titulo;
    }
public function getpaginas()
    {
        return $this->paginas;
    }
    public function setpaginas($paginas)
    {
        $this->paginas = $paginas;
    }
public function V1(){
    
    echo 'hola';
    
}
  
}



 ?>