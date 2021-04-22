<?php

 $host = "127.0.0.1";
 $user = "root";
 $password = "";
 $db = "adsitech_bd";

 global $conection;
 $conection = @mysqli_connect($host, $user, $password, $db);
 mysqli_set_charset($conection, "utf8");
/*
if($conection){
    echo "Conexion Exitosa";
}else{
     echo "No se puedo Conectar a la DB";
}*/