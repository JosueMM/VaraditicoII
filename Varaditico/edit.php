<?php
ob_start();
$con = mysqli_connect("localhost", "root", "", "varaditico") or die("Error de conexion");

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $query = "SELECT * FROM trabajos WHERE id = $edit_id";
    $execute = mysqli_query($con,$query);
    $row = mysqli_fetch_array($execute);
    $update = "UPDATE trabajos SET estado = 'Terminado' Where id = $edit_id";
    $execute = mysqli_query($con,$update);
    echo "<script>alert('Trabajo Terminado!')</script>";
    echo "<script>window.open('trabajos.php','_self')</script>";
  }
if(isset($_GET['coment'])){
    $edit_id = $_GET['coment'];
    $query = "SELECT * FROM mensajeria WHERE id = $edit_id";
    $execute = mysqli_query($con,$query);
    $row = mysqli_fetch_array($execute);
    $del = "DELETE FROM mensajeria WHERE id = $edit_id";
    $execute = mysqli_query($con,$del);
    echo "<script>alert('Mensaje Eliminado!')</script>";
    echo "<script>window.open('mensajeria.php','_self')</script>";
  }

  if(isset($_GET['estrellas'])){
    $estrellas = $_GET['estrellas'];
    $id= $_SESSION['valorar'];
    
    $query = "SELECT  * FROM trabajos WHERE id = $id";
    $execute = mysqli_query($con,$query);
    $row = mysqli_fetch_array($execute);
 
 $idContratado = $row['id_contratado'];

$query = "SELECT  * FROM usuarios WHERE id = $idContratado";
    $execute = mysqli_query($con,$query);
    $row = mysqli_fetch_array($execute);
    

$estre = $row['valorar'];
$estrellas = $estrellas+$estre;
    $update = "UPDATE usuarios SET valorar = '$estrellas' Where id = $idContratado";
    $execute = mysqli_query($con,$update);
    $update = "UPDATE trabajos SET valorado = '1' Where id = $id";
    $execute = mysqli_query($con,$update);
    echo "<script>alert('Valoracion Realizada!')</script>";
    echo "<script>window.open('contratados.php','_self')</script>";
  }

    if(isset($_GET['valorar'])){  
    $id = $_GET['valorar'];
    $_SESSION['valorar'] = $id;
   echo "<script>window.open('estrellas.php','_self')</script>";

  }





    
    ?>   
