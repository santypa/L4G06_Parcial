<?php
//Datos de conexion server
include ('includes/db.php');

/*
    //prueba conexion
    if($con->connect_error){        //$con->connect_error){
        echo "Base de datos no disponible";
    }else{
        echo "conectados a la base de datos";
    }
    */
    $id = $_POST["id"];
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $estado= $_POST["estado"];
    $password=md5($password);
       //error por si sola

    echo "la informacion enviada es: Nombre : $nombre email: $email";  
    
    echo $id;

    $sql = "UPDATE usuarios set nombre='$nombre',apellido='$apellido',email='$email',password='$password',estado='$estado' WHERE id=$id";


    if($nombre=="" || $apellido=="" || $email=="" || $password==""){

    }else{
    
      if(DB::query($sql))  {//$con->query($query)==true es lo mismo o se puede omitir
          echo "usuario guardada correctamente";
      }
      else{
          echo"No se logro guardar el usuario".$conexion->error;
      }
    
    }


//DB::query($sql);
    
   /*/
    if(DB::query($sql)){        //$con->query($query)){
        echo "persona guardada correctamente..."."<br>";
    }else{
        echo "no se ha podido guardar la persona."."<br>";
    }
    */
    
    //$con->close();

    header ('Location: index.php'); //para q limpie y guarde los datos
?>

