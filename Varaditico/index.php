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
            <a class="navbar-brand text-white" href="#">Varaditico</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Perfil
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
    <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center">Ayuda</h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/mecanico.jpg">
                    <div class="card-block p-3">
                        <h4 class="card-title">Mecanicos</h4>
                        <p class="card-text">Podras adquirir servicios de mecaica si la necesitas.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/grua.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Gruas</h4>
                        <p class="card-text">Si necesitas una grua tabien podras buscar en el mapa ese servicio que necesitas.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/mensaje.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Mensajes</h4>
                        <p class="card-text"> Podras hablar con los proveedores de los servicios necesitados</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="display-4">Mapa</h3>
                <hr class="bg-dark w-25 ml-0">
                <p class="lead">
                    Aqui pondras tu ubicacion y te saldran los mas cercanos que podras contratar dependiendo al servicio que necesites.
                </p>
                <p>
                    Podras seleccionar si ocupas grua o mecanico.
                </p>
                <ul class="list-unstyled pl-4">
                    <li><i class="fa fa-check"></i> Facil</li>
                    <li><i class="fa fa-check"></i> Rapido</li>
                    <li><i class="fa fa-check"></i> Eficaz</li>
                </ul>
               
            </div>
            <div class="col-md-12">
            <style >
                #map{
                    width:100%;
                    height: 400px;
                }
            </style>
         <div id="map"></div>
            </div>
        </div>
    </div>

   
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
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvFsfISMEo7_mzwF1cDR__G2QgPEZ1FX0&callback=initMap">
    </script>
<script src="js/main.js"></script>
<script src="js/localizacion.js"></script>
</body>

</html>