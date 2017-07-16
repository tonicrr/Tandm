<?php    
    $archivo = "../php/contador_blog3.txt"; // Archivo con el numero de visitas
    // Leemos las visitas.
    if(file_exists($archivo)){
        $contador = file_get_contents($archivo);       
        $contador ++;
    } else {
        // Crear archivo contador. Será con la 1ª visita
        touch($archivo);
        chmod($archivo, 0755);
        $contador = 1; // Valor por defecto si no existe fichero de visitas
    }
         
    // Grabamos cookie de 1 hora de duracion
    setcookie("yaHasEstadoAqui",1, time() + 3600);
     
    // Grabamos contador
    file_put_contents($archivo, $contador); // solo PHP 5!!!
     
?>