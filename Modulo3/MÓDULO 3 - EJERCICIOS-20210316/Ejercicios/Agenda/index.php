<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
  <?php 

require_once("agenda.php");
?>
      
      
  </head>  

<body>
    <h1>Agenda ♤</h1>
    
    
    
 <h1> <?php
  $saludo = salud();
  
  ?>
  </h1>
  <form action="agenda.php" method="POST">
  <input type=”text” placeholder="Buscar contacto" name="buscarN">
  <button onclick="">buscar</button>
  </form>
  <form action="agenda.php" method="POST">
  <h1>Crear contacto</h1>
  <input type="text" placeholder="nombre" name="nombreC" id="nombreC">
  <br><br>
 
  <input type="text" name="NumeroC" id="numeroC" placeholder="numero">
  <br><br>
  <button>Guardar</button>
  </form>
    <form method="POST" action="agenda.php">
        <H1 >Contactos</H1>
        <table border="0">
            <tr>
                
                <th><h2>Nombre ☆</h2></th>
                <th><h2>numero #</h2></th>
                
            </tr>
            <tr>
           <?php 
           $Mostrar= listar();
           ?>
            </tr>
            
        </table>
        
        
    </form>
</body>    
    
</html>



