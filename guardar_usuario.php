<?php
include('includes/db.php');

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$email= $_POST["email"];
$password= $_POST["password"];
$estado= $_POST["estado"];

$password=md5($password);

$estado="activo";


$sql="insert into usuarios(nombre,apellido,email,password,estado)
values('$nombre', '$apellido', '$email','$password','$estado')";




if($nombre=="" || $apellido=="" || $email=="" || $password==""){

}else{

  if(DB::query($sql))  {//$con->query($query)==true es lo mismo o se puede omitir
      echo "usuario guardada correctamente";
  }
  else{
      echo"No se logro guardar el usuario".$conexion->error;
  }

}
    header('Location: crear.php');

?>