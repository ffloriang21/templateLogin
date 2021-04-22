<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<h2>Formulario de Ingreso y Registro a AdsiTech</h2>
<div class="container" id="container">
<!-- ********** Formulario de SIGN UP *********** -->
	<div class="form-container sign-up-container">
		<form action="sign-up.php" method="post">
			<h1>Crear Cuenta</h1>
			<div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="user_fm" placeholder="Name" />
			<input type="text" name="correo_fm" placeholder="Email" />
			<input type="password" name="pass_fm" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
    
    <!-- ********** Formulario de SIGN IN *********** -->
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Inicio de Sesion</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name="user_fm" placeholder="Email" />
			<input type="password" name="pass_fm" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Modified with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florian Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script type="Text/Javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
	    container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
	    container.classList.remove("right-panel-active");
    });
</script>

</body>
</html>

<?php
// ***************** Codigo Back End ***********************
session_start();
if(empty($_SESSION['activa'])){

    $alert = "";
    /*if(!empty([$_POST])){
        $alert = "Se oprimiio el Boton Submit";    
    }*/
    if(empty($_POST['user_fm']) || empty($_POST['pass_fm'])){
        $alert = "Por favor Digite su Usuario o Contraseña";
    }else{
        require_once "conexion.php";
        // Guardamos en Variables los Datos de Validacion y Clave Encriptada
            
        $usuario = mysqli_real_escape_string($conection, $_POST['user_fm']);
        $clave = md5(mysqli_real_escape_string ($conection, $_POST['pass_fm']));
        
        //print_r($usuario);
        //print_r($clave);
    
        $consulta = "SELECT * FROM user WHERE((nombre_user='$usuario') AND (clave_user='$clave'))";
        $query = mysqli_query($conection, $consulta);
        $result = mysqli_num_rows($query);

        if($result > 0){
            $datos = mysqli_fetch_array($query);
            //print_r($datos);

            $_SESSION['activa'] = true;
            $_SESSION['iduser'] = $datos['id_user'];
            $_SESSION['nombre'] = $datos['nombre_user'];
            $_SESSION['email'] = $datos['correo_user'];
            $_SESSION['user'] = $datos['nombre_user'];

            header('location: dashboard/');
        }else{
            $alert = "Usuario o contraseña incorrectos";
            $_SESSION['activa'] = false;
            session_destroy();
        }
    }
}else{
    header('location: dashboard/');
}
?>