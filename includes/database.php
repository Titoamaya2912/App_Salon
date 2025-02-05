<?php

$db = mysqli_connect('localhost','root','root','appsalon');
//nombre = mysqli_connect(hostname, usuario, contraseña,nombre de la base)

if(!$db){
    echo "Hubo un error";
    exit;//previene la ejecucion de mas codigo
}
