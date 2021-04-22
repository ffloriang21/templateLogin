<?php 
require_once "conexion.php";
        // Guardamos en Variables los Datos de Validacion
        
        
        $usuario = mysqli_real_escape_string($conection, $_POST['user_fm']);
        $correo = mysqli_real_escape_string($conection, $_POST['correo_fm']);
        $clave = md5(mysqli_real_escape_string($conection, $_POST['pass_fm']));
        $id = strval(rand(1, 999));
    
        $consulta = "INSERT INTO user(id_user, nombre_user, correo_user, clave_user) 
                     VALUES('$id', '$usuario', '$correo', '$clave')";
        
        $query = mysqli_query($conection, $consulta);
        $result = mysqli_num_rows($query);

        if($result > 0){
            $datos = mysqli_fetch_array($query);
            $alert = "Usuario Creado exitosamente.";
        }

?>