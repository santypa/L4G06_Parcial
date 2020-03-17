<?php
     include('includes/db.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/styles_index.css">  
    <link rel="icon"href="ico/a.jpg">
</head>
<body>
<div class="login-box" >
    <div class="Tabls">

            <h1> <n>REGISTROS DE LA BASE DE DATOS</n></h1>

      <table >
         <tr>
            <thead>
              <th>id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Password</th>
              <th>Estado</th>
              <th>Acciones</th>
           </thead>      
        </tr>

    <?php
        
        $sql="SELECT * FROM usuarios";
        $result= DB::query($sql);
     //  $result= mysqli_query($con,$sql);

     
     while($mostrar= mysqli_fetch_array($result)){
        ?>

      <tr>
       <td><?php echo $mostrar['id'] ?></td>
       <td><?php echo $mostrar['nombre'] ?></td>
       <td><?php echo $mostrar['apellido'] ?></td>
       <td><?php echo $mostrar['email'] ?></td>
       <td><?php echo $mostrar['password'] ?></td>
       <td><?php echo $mostrar['estado']   ?></td>
      
       <?php   
       $esta=$mostrar['estado'];
       if($esta=="inactivo"){
           $esta="activo";
       }else{
        $esta="inactivo";
       }
       
       $ide=$mostrar['id'];
       ?>
      
       
       <td> <a href="estado.php?id=<?php echo $mostrar['id'] ?>"> <?php echo $esta?>    </a>

            <a href="modificar.php?id=<?php echo $mostrar['id'] ?>">  Modificar  </a> 
            
      </td>
       
      </tr>

          <?php
      }
            
     ?>
      </table>

        </div>
      <a href="guardar_usuario.php" ><img src="img/bt3.png"   alt="logo"></a>
      
    


</div>
  
</body>
</html>

