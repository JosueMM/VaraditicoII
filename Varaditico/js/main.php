<?php




class User(){
   
     $con = mysqli_connect("localhost","root","","utn") or die ("Error de conexion");

     $consulta = "SELECT * FROM user";
$ejecutar = mysqli_query($con,$consulta);


foreach ($ejecutar as $users => $user) {
	
     
}
  mysqli_close($con);
}

?>

