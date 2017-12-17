<?php
ob_start();
session_start();
$con = mysqli_connect("localhost", "root", "", "varaditico") or die("Error de conexion");
?>
<!DOCTYPE html>


<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">





  <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Varaditico</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="trabajos.php">Trabajos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="contratados.php">Valorar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="mensajeria.php">Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="perfil.php">Perfil
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
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






<div class="container">
    <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">

          <?php

$nombre = "";
$correo = "";
$contrasena = "";
$servicio = "";
$descripcion = "";
$estado = "";
$ubicacion = "";
$id = "";
$consulta = "SELECT * FROM usuarios";
$ejecutar = mysqli_query($con, $consulta);

        $nombre = $_SESSION['nombre'];
        $correo = $_SESSION['correo'];
        $servicio = $_SESSION['servicio'];
        $descripcion = $_SESSION['descripcion'];
        $id = $_SESSION['id'];

?>
          
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
    
          <div class="profile-usertitle-name">
            Nombre : <?php
echo $nombre ?>
          </div>
          <div class="profile-usertitle-job">
            Proveedor: <?php
echo $servicio ?>
          </div>
          <div class="profile-usertitle-job">
            <p id="correo">Correo: <?php
echo $correo ?></p>
            <p id="Descripcion">Descripcion del Servicio: <?php
echo $descripcion ?></p>
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
      
        <!-- END SIDEBAR BUTTONS -->    
      </div>
    </div>
    <div class="col-md-9">
            <div class="profile-content" style="margin-top: 30px">
         <div class="container">
  <div class="page-header">
  <h3 class="display-4 text-center">Trabajos</h3>
</div>


<div class="row col-md-12 col-md-offset-2 custyle table-responsive">
    <table class="table  table-striped custab">
    <thead>
  
        <tr>
            <th>#Codigo</th>
            <th>Usuario</th>
            <th>Estado</th>
            <th>Fecha</th>

          
        </tr>
</thead>
<tr>
        <?php
$idd = $_SESSION['id'];
$consulta = "SELECT T2.id, T1.nombre,T2.estado,T2.fecha,T2.valorado
FROM usuarios T1 INNER JOIN trabajos T2 where T1.id = T2.id_Contratado and T2.id_contrata = $idd";
$ejecutar = mysqli_query($con, $consulta);
$i = 0;

while ($fila = mysqli_fetch_array($ejecutar))
  {
  $id = $fila['id'];
  $nombre = $fila['nombre'];
  $estado = $fila['estado'];
   $fecha = $fila['fecha'];
  $val = $fila['valorado'];
  $i++;
?>
    
            
                <td><?php
  echo $id; ?></td>
                <td><?php
  echo $nombre; ?></td>
                <td><?php
  echo $estado; ?></td>
                <td><?php
  echo $fecha; ?></td>
  <?php 
if($estado == "Terminado" && $val == 0){?>

<td><a href="contratados.php?valorar=<?php echo $id;?>">Valorar</a>
</td>
<?php
}else{?>
<td>Trabajo no terminado o Ya lo Valoraste</td>
<?php } ?>
  

  
               
            </tr>
            <?php
  } ?>
            
    </table>
     <?php
        if(isset($_GET['valorar'])){
            include("edit.php");
        }

    ?>

    </div>
       
     

</div>
    </div>
  </div>
</div>

<br />
<br />







<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>