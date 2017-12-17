<?php 
ob_start();
session_start();

 $con = mysqli_connect("localhost","root","","varaditico") or die ("Error de conexion"); 
 ?>
<!DOCTYPE html>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Varaditico</title>
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
    <!-- Navigation -->

    <!-- Carousel Slider -->
    <style>
        #carouselLogo{
            margin-top: 55px;
        }
    </style>
    <div id="carouselLogo" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselLogo" data-slide-to="0" class="active"></li>
            <li data-target="#carouselLogo" data-slide-to="1"></li>
            <li data-target="#carouselLogo" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/fondo1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/fondo2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/fondo3.png" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselLogo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselLogo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel Slider -->

    <!-- Card -->
    <div class="container">
        <h3 class="display-4 text-center">Envia Mensajes</h3>
        <hr class="bg-dark mb-4 w-25">
        
       <div class="panel panel-default">
        <div class="row">

              <form method="POST" class="form-horizontal col-md-12" >
                                     <input type="text" class="input" style="  -webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
    border: 1px solid #848484; 
    outline:0; 
    height:25px; 
    padding: 20px;
    width: 100px; "  name="num" > 
                                    <input type="submit" name="log"  style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    margin: 3px;
    padding: 12px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 12px;
    font-size: 16px;" value="Verificar si el Usuario Existe">
                                </form>
     

<?php     
 
      $_SESSION['nombreUser'] = "";
       $_SESSION['descripcionUser'] = "";
            $consulta = "SELECT * FROM usuarios";
   $ejecutar = mysqli_query($con, $consulta);

if(isset($_POST['log'])){ 

   $usu = true;
while($fila = mysqli_fetch_array($ejecutar)){    
    
    if($fila['id'] == $_POST['num']){
      $nombre = ($fila['nombre']);
       $descripcion = ($fila['descripcion']);
        $_SESSION['idUser'] = $fila['id'];
      $_SESSION['nombreUser'] = $nombre;
       $_SESSION['descripcionUser'] = $descripcion;
       $usu = false;
    }
    }
    
    if($usu){
        echo "<script> alert('Numero de usuario no existe') </script>";
    
    }
}


?>

           <form method="POST" class="form-horizontal col-md-12">

               <label class="col-md-12 control-label" for="textarea" style="font-size: 15px;">Escriba el mensaje que desea enviar <strong>le recomendamos que se abstenga de brindar informacion personal o sensible que no extrictamente necesaria.</strong></label>
  <div class="col-md-12">  
<label id="usuario" class="col-md-12 control-label" for="textarea" style="font-size: 15px;">Para: <?php echo $_SESSION['nombreUser']  ?> Servicio : <?php echo $_SESSION['descripcionUser']  ?></label>
    <textarea class="form-control col-md-12" rows="7" cols="" id="textarea" name="textarea"></textarea>
  </div>
</div>


    <input type="submit" name="ok" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    margin: 3px;
    padding: 12px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 12px;
    font-size: 16px;" value="Enviar">
    <input type="submit" name="no" style="background-color: #f44336; /* Green */
    border: none;
    color: white;
    margin: 3px;
    padding: 12px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 12px;
    font-size: 16px;" value="Cancelar">
<br>



           </form>

    <?php 
if(isset($_POST['ok'])){ 

$idUser = $_SESSION['idUser'];
$id = $_SESSION['id']; 
$mensaje = $_POST['textarea'];

 $consulta = "INSERT into mensajeria (id_usuarioEnvia, id_usuarioRecive, mensaje) values ('$id','$idUser','$mensaje')";
   $ejecutar = mysqli_query($con, $consulta);

   echo "<script> alert('Mensaje enviado con exito') </script>";

    }

    if(isset($_POST['no'])){
    header("index.php");


    }





    ?>

   
                <div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white">

        <!-- Social Icons -->
        <div class="bg-primary">
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-6 col-lg-7">
                        <h4 class="mb-0 white-text">Nuestras redes sociales</h4>
                    </div>
                    <div class="col-md-6 col-lg-5 text-right">
                        <a><i class="fa fa-facebook white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-twitter white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-google-plus white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-linkedin white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-instagram white-text mr-lg-4 fa-2x"> </i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social Icons -->

        <!-- Footer Links -->
        <div class="container pt-5 pb-2">
            <div class="row">

                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h4>Varaditico</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p>
                        Pagina web desarrolladoa por Josue Mora proyecto final del curso Programacion Web UTN
                    </p>
                </div>

              

                

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h4>Info</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p><i class="fa fa-home mr-3"></i> Porvenir,Alajuela Costa Rica</p>
                    <p><i class="fa fa-envelope mr-3"></i>josuemora789@gmail.com</p>
                    <p><i class="fa fa-phone mr-3"></i>(+506)86554978</p>
                    
                </div>

            </div>
        </div>
        <!-- Footer Links-->

        <hr class="bg-white mx-4 mt-2 mb-1">

        <!-- Copyright-->
        <div class="container-fluid">
            <p class="text-center m-0 py-1">
                © 2017 Copyright <a href="https://getbootstrap.com/" class="text-white">Varaditico</a>
            </p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    

</body>

</html>