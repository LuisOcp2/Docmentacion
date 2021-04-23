<?php
        $numero_uno = 1;
        $numero_dos = 2;
        echo "numero uno ".$numero_uno;
        echo "<br><br>";
        echo "numero dos ".$numero_dos;
        echo "<br><br>";
        $numero_auxiliar = $numero_uno;
        $numero_uno = $numero_dos;
        $numero_dos = $numero_auxiliar;
        echo "<br><br>";
        echo "numero uno ".$numero_uno;
        echo "<br><br>";
        echo "numero dos ".$numero_dos;
 ?>