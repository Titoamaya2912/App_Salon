<?php

function obtenerServicios(){
 
    try {
        //importar las credenciales
        require 'database.php';

        //Consulta SQL
        $sql = "SELECT * from servicios;";
        
        //Realizar la consulta
        $Consulta1 = mysqli_query($db,$sql);
        return $Consulta1;
        //Acceder a los resultados
       

    } catch (\Throwable $th) {
        var_dump($th);
    }

}


obtenerServicios();