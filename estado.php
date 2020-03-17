
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



include('includes/db.php');

$estado= $_POST["estado"];

if($estad=="inactivo"){
    $sql="Update usuarios Set estado='inactivo', estado='activo'  where id='$id'";
    $c=1;
}
if($c==0){
    $sql="Update usuarios Set estado='activo', estado='inactivo' where id='$id'";
}

$c=0;

$result=DB::query($sql);



//header ('location: index.php');


?>