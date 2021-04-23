<html>
    <head></head>
    
    
    <body>
        
        <form action="informacioninscripcion.php" method="POST">
            
            <div>
                
                <h1>formulario de inscripcion</h1>
                <input type="text" name ="documento" required="" placeholder="documento">
                <br>
                <br>
                <input type="text" name="confirmardocumento" id="" required="" placeholder="confirmardocumento">
                <br><br>
                <input type="text" name="nombres" id="" required="" placeholder="nombres">
                <br><br>
                <input type="text" name="apellido" id="" required="" placeholder="apellido">
                <br><br>
                <input type="email" name="correo" id="" required="" placeholder="correo">
                <br><br>
                <input type="email" name="confirmarcorreo" id="" required="" placeholder="confirmar correo">
                <br><br>
                <select name="pais" id="">
                    
                    <option value="colombia">Colombia</option>
                    <option value="venezuela">venezuela</option>
                    <option value="ecuador">ecuador</option>
                    <option value="argentina">argentina</option>
                    <option value="mexico">mexico</option>
                    <option value="otro">otro</option>
                         </select>
                    <br><br>
                    
                    <input type="text" name="departamento" id="" placeholder="departamento" required="">
                      <br><br>
                    <input type="text" name="ciudad" id="" required="" placeholder="ciudad">
                      <br><br>
                      edad
                      <br>
                      <select name="edad" id="" >
                          
<option value="rango1">menor de 18</option>
<option value="rango2">18-25</option>
<option value="rango3">25-35</option>
<option value="rango4">36-45</option>
<option value="rango5">mayor de 45</option>
                      </select><br><br>
                    <input type="text" name="direccion" id="" placeholder="direccion"required="">
                      <br><br>
                    <input type="text" name="telefono" placeholder="telefono">
                      <br><br>
                     
                     <select name="diplomado" id="">
                         
    <option value="PrPhp">Programacion en php</option> 
    <option value="PrgJava">programacion en java</option>
    <option value="bsdtsmysql">base de datos en MySQL</option>
    <option value="diseñodigital">diseño digital</option>
    <option value="marketing">marketing</option>
    </select>
           
    <br><br>
    <select name="como" id="">
        
        <option value="facebook">facebook</option>
        <option value="amigo">amigo</option>
        <option value="anuncio">anuncio</option>
        <option value="otro">otro</option>
        
    </select>
    <br><br>
    <input type="radio" name="sexo" id="" value="masculino">masculino
    <input type="radio" name="sexo" id="" value="femenino">femenino
    <br><br>
    <input type="radio" required="" name="terminos">aceptar terminos y condiciones
    <br><br>
    <input type="submit" value="enviar" name="enviar">
    
    
                
            </div>
            
            
        </form>
        
    </body>
</html>