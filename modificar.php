<?php
include('includes/db.php');
//  VALIDAR SI EXISTE UNA VARIABLE...

if(isset($_GET['id']) == false){
    echo "es necesario enviar un id";
    die;
}

$id = $_GET['id'];
$sql = "SELECT * from usuarios where id = '$id'";
$usuario = DB::query($sql);

$usuario = mysqli_fetch_object($usuario);
//var_dump($persona);// -> $nombre

if(!$usuario){//$persona == false){
    echo "el usuario no existe";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon"href="ico/a.jpg">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/style.css"> 
    <title>login</title>
</head>
<body>
 
 <div class="login-box" >

     
 <img src="img/v.png" class="avatar" alt="Avatar Image"> 
     <h1>USUARIOS</h1>
     
     <form action="modificar_usuario.php" method="post">

            <input  type="hidden" name="id"  value="<?=$usuario->id?>">
  
            <label for="nombre" >Nombre </label> 
            <input type="text" name="nombre"  value="<?=$usuario->nombre?>">
            
            <label for="apellido">Apellido</label> 
            <input type="text" name="apellido"  value="<?=$usuario->apellido?>">

            <label for="email">Email</label> 
            <input type="text" name="email"  value="<?=$usuario->email?>">

            <label for="password">Password</label> 
            <input type="password" name="password" required placeholder="password" value="<?=$usuario->password?>">

            <label for="estado">estado</label> 

            <select fro="estado" name="estado">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
 <input type="submit" value="Modificar"/> 

 <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>

 
 
<!--
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
--> 
    </form>
     
     </div>
     
    
        </body>
</html>

