<!DOCTYPE html>
<?php  $con = mysqli_connect("localhost","root","","varaditico") or die ("Error de conexion"); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/login.css">






	<title>Login</title>
</head>
<body>
 <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- TERMS -->
                

                <!-- RECOVERY -->
               
                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="#"><img src="https://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/logo.png" alt=""></a>
                    </div>
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        <div class="one">
                            <h2><span>Varaditico</span></h2>
                            <p>Solicita una ayuda cuando la necesitas!.</p>
                        </div>
                        <div class="two">
                            <h2><span>Gruas</span></h2>
                            <p>Podras contactar a una grua para que te eche una mano cuando no puedas hacer funcionar tu vehiculo</p>
                        </div>
                        <div class="three">
                            <h2><span>Mecanicos</span></h2>
                            <p>Puedes llamar o contactar a un mecanico para que te pueda solucionar tu problema.</p>
                        </div>
                        <div class="four">
                            <h2><span>Negocios</span></h2>
                            <p>Cierra negocios con tus clientes o proveedores.</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <!-- TABS -->
                    	<div class="tabs">
                            <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                    		<h3 class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a></h3>
                    	</div>
                        <!-- TABS CONTENT -->
                    	<div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                    		<div id="login-tab-content" class="active">
                    			<form method="POST" action="Login.php" >
                    				<input type="text" class="input" name="correo" autocomplete="off" placeholder="Email or Username">
                    				<input type="password" class="input" name="pass" autocomplete="off" placeholder="Password">	
                    				<input type="submit" name="log" value="Login">
                    			</form>
                    			<?php
                                
                                $consulta = "SELECT * FROM usuarios";

                               $ejecutar = mysqli_query($con, $consulta);

if(isset($_POST['log'])){
    $logeo = true;


while($fila = mysqli_fetch_array($ejecutar)){
    
    $contra = md5($_POST['pass']);
    $pass = ($fila['contra']);
    $correoL = $_POST['correo'];
    $correoBD = $fila['correo'];

    if($contra== $pass && $correoL== $correoBD){

        $logeo = false;
          echo "<script> alert ('LOGEADO!')</script>"; 
          echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
      $id=$fila['id'];
      $consulta = "UPDATE usuarios SET log = '1' WHERE id=$id";
      $ejecutar = mysqli_query($con, $consulta);
          break;   
    }

}
if($logeo){
 echo "<script> alert ('Usuario No Registrado!')</script>";
}

}


?>
                    		</div>
                            <!-- TABS CONTENT SIGNUP -->
                    		<div id="signup-tab-content">
                    			<form method = "POST" action = "Login.php">
                                     <label> Clave de ubicacion :</label>
                                    <input type="text" class="input" id="ubicacion" name="ubicacion" required readonly >
        <label> Nombre :</label>
        <input type="text" class="input" name="nombre" required >
        <br/>

        <label> Password :</label>
        <input type="password" class="input" name="contra" required >
        <br/>
            
            <label> Email :</label>
        <input type="email" class="input" name="correo" required >
        <br/>
  <h6>Si usted no es proveedor porfavor no llene las 2 siguientes casillas y dele a "Registrarse" directamente</h6>
           <label> Servicio :</label>
                               <div class="col-md-12">
                <select name="servicios"  class="form-control" style="background-color: #62FDCE;">
                            <option value="no" selected>servicio?</option>
                            <option value="Gruas">Gruas</option>
                            <option value="Mecanico">Mecanico</option>
    
                </select>

            </div>
            <br/>
             <label> Descripcion :</label>
             <input type="text" class="input" name="descripcion" >
        <br/>
        <input type="submit"   name="insert" value ="Registrar">

       

            
   </form>

   <script >
    if(navigator.geolocation){
            //obtenemos ubicacion
            navigator.geolocation.getCurrentPosition((position)=>{
this.latitude = position.coords.latitude;
 this.longitude = position.coords.longitude;


var res = latitude + "," + longitude;
document.getElementById('ubicacion').value = res;

            });
        }else{
            alert("tu navegador no soporta geolocalizacion!! :(")

        }
   </script>
                    			<?php

                              

if(isset($_POST['insert'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $contra = md5($contra);
    $servicio = $_POST['servicios'];
    $descripcion = $_POST['descripcion'];
  
    $ubicacion = $_POST['ubicacion'];
    $estado= 1;

      

    

   if($_POST['servicios']=="no"){
$insert = "INSERT INTO usuarios(nombre, correo,contra,servicio,descripcion,estado,ubicacion,log) VALUES ('$nombre','$correo','$contra','NO','NO','1','$ubicacion','0')";
   }else{
    $insert = "INSERT INTO usuarios(nombre, correo,contra,servicio,descripcion,estado,ubicacion,log) VALUES ('$nombre','$correo','$contra','$servicio','$descripcion','$estado','$ubicacion','0')";
   }
 




$ejecutar = mysqli_query($con, $insert);
if($ejecutar){

 echo "<script> alert ('REGISTRADO!')</script>";

 }

}

?>

                    		</div>
                    	</div>
                
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


<script >/* LOGIN - MAIN.JS - dp 2017 */

// LOGIN TABS
$(function() {
	var tab = $('.tabs h3 a');
	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');
		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});

// SLIDESHOW
$(function() {
	$('#slideshow > div:gt(0)').hide();
	setInterval(function() {
		$('#slideshow > div:first')
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo('#slideshow');
	}, 3850);
});

// CUSTOM JQUERY FUNCTION FOR SWAPPING CLASSES
(function($) {
	'use strict';
	$.fn.swapClass = function(remove, add) {
		this.removeClass(remove).addClass(add);
		return this;
	};
}(jQuery));

// SHOW/HIDE PANEL ROUTINE (needs better methods)
// I'll optimize when time permits.
$(function() {
	$('.agree,.forgot, #toggle-terms, .log-in, .sign-up').on('click', function(event) {
		event.preventDefault();
		var terms = $('.terms'),
        recovery = $('.recovery'),
        close = $('#toggle-terms'),
        arrow = $('.tabs-content .fa');
		if ($(this).hasClass('agree') || $(this).hasClass('log-in') || ($(this).is('#toggle-terms')) && terms.hasClass('open')) {
			if (terms.hasClass('open')) {
				terms.swapClass('open', 'closed');
				close.swapClass('open', 'closed');
				arrow.swapClass('active', 'inactive');
			} else {
				if ($(this).hasClass('log-in')) {
					return;
				}
				terms.swapClass('closed', 'open').scrollTop(0);
				close.swapClass('closed', 'open');
				arrow.swapClass('inactive', 'active');
			}
		}
		else if ($(this).hasClass('forgot') || $(this).hasClass('sign-up') || $(this).is('#toggle-terms')) {
			if (recovery.hasClass('open')) {
				recovery.swapClass('open', 'closed');
				close.swapClass('open', 'closed');
				arrow.swapClass('active', 'inactive');
			} else {
				if ($(this).hasClass('sign-up')) {
					return;
				}
				recovery.swapClass('closed', 'open');
				close.swapClass('closed', 'open');
				arrow.swapClass('inactive', 'active');
			}
		}
	});
});

// DISPLAY MSSG
$(function() {
	$('.recovery .button').on('click', function(event) {
		event.preventDefault();
		$('.recovery .mssg').addClass('animate');
		setTimeout(function() {
			$('.recovery').swapClass('open', 'closed');
			$('#toggle-terms').swapClass('open', 'closed');
			$('.tabs-content .fa').swapClass('active', 'inactive');
			$('.recovery .mssg').removeClass('animate');
		}, 2500);
	});
});

// DISABLE SUBMIT FOR DEMO
$(function() {
	$('.button').on('click', function(event) {
		$(this).stop();
		event.preventDefault();
		return false;
	});
});
//# sourceURL=pen.js
</script>

</body>


</html>