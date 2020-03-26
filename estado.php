
<?php
include('includes/db.php');
//  VALIDAR SI EXISTE UNA VARIABLE...

if(isset($_GET['id']) == false){
    echo "es necesario enviar un id";
    die;
}
//$estado=$_GET['estado'];

$id = $_GET['id'];


$sql = "SELECT * from usuarios where id = '$id'";
$usuario = DB::query($sql);

$usuario = mysqli_fetch_object($usuario);
//var_dump($persona);// -> $nombre

if(!$usuario){//$persona == false){
    echo "el usuario no existe";
    die;
}
//Datos de conexion server
    $estado= $usuario->estado;
    echo $id;

    if($estado!="inactivo"){
       
        $sql="Update usuarios Set estado='activo', estado='inactivo' where id='$id'";
    }
    else{
        $sql="Update usuarios Set estado='inactivo', estado='activo'  where id='$id'";
    }

      if(DB::query($sql))  {//$con->query($query)==true es lo mismo o se puede omitir
          echo "usuario guardada correctamente";
      }
      else{
          echo"No se logro guardar el usuario".$conexion->error;
      }
    
    header ('Location: index.php'); //para q limpie y guarde los datos
?>
