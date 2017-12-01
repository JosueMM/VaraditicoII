<!DOCTYPE html>
<?php  $con = mysqli_connect("localhost","root","","varaditico") or die ("Error de conexion"); ?>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">





	<title></title>
</head>
<body>
	<style >
		body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
	</style>



<?php
					$consulta = "SELECT * FROM usuarios WHERE log='1'";
                    $ejecutar = mysqli_query($con, $consulta);
while($fila = mysqli_fetch_array($ejecutar)){
	if($fila['log'] == "1"){

		$nombre = $fila['nombre'];
        $email = $fila['correo'];
        $contrasena = $fila['contra'];
        $servicio = $fila['servicio'];
        $descripcion = $fila['descripcion'];
        $estado = $fila['estado'];
        $ubicacion = $fila['ubicacion'];
        $id = $fila['id'];
        $contrasena = md5($contrasena);
	}else{
		$nombre = "Invitado";
        $email = "Invitado";
        $contrasena = "Invitado";
        $servicio = "no";
        $descripcion = "NO";
        $estado = "0";
        $ubicacion = "Invitado";
        $contrasena = "Invitado";
	}
        

}

  ?>


<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Nombre : <?php echo $nombre ?>
					</div>
					<div class="profile-usertitle-job">
						Proveedor: <?php echo $servicio ?>
					</div>
					<div class="profile-usertitle-job">
						<p id="correo">Correo: <?php echo $email ?></p>
						<p id="Descripcion">Descripcion del Servicio: <?php echo $descripcion ?></p>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Contratar</button>
					<button type="button" class="btn btn-danger btn-sm">Mensaje</button><br>
					<br>
					<button type="button" class="btn btn-principal btn-sm" onclick="<?php echo $consulta = "UPDATE usuarios SET log='0 ' WHERE id='$id'" ;
    
 $ejecutar = mysqli_query($con, $consulta); ?>" <a href="window.location.href = 'Login.php'"></a>>Log Out</button>


				</div>
				<!-- END SIDEBAR BUTTONS -->		
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <form method = "POST" action = "perfil.php">
                                     <label> Clave de ubicacion :</label>
                                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" required readonly value="<?php echo $ubicacion ?>">
        <label> Nombre :</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" required >
        <br/>

        <label> Password :</label>
        <input type="password" class="form-control" name="contra" value="<?php echo $contrasena ?>" required >
        <br/>
            
            <label> Email :</label>
        <input type="email" class="form-control" name="correo" value="<?php echo $email ?>" required >
        <br/>
  
           <label> Servicio :</label>
                               <div class="col-md-12">
                <select name="servicios"  class="form-control" value="<?php echo $servicio ?>">
                            <option value="no" selected>servicio?</option>
                            <option value="Gruas">Gruas</option>
                            <option value="Mecanico">Mecanico</option>
    
                </select>

            </div>
            <br/>
             <label> Descripcion :</label>
             <input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion ?>" >
        <br/>
        <input type="submit"  class="form-control" name="insert" value ="Actualizar">

       

            
   </form>
            </div>
		</div>
	</div>
</div>

<br>
<br>



<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>