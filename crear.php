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
     
     <form action="guardar_usuario.php" method="post">
         
            <label for="nombre" >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre">
            
            <label for="apellido">Apellido</label> 
            <input type="text" name="apellido" required placeholder="apellido">

            <label for="email">Email</label> 
            <input type="text" name="email" required placeholder="email">

            <label for="password">Password</label> 
            <input type="password" name="password" required placeholder="password">
            
            <input type="submit" value="Guardar">
            
          
          
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
           

    </form>
     
 </div>
 

    
</body>
</html>