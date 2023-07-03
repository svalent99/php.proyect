<?php
session_start();
if($_POST){
   if(($_POST['Usuario']=="Valentina") && ($_POST['Contraseña']=12345) ){
    echo "¡Ingreso exitoso!";
    $_SESSION['Usuario']="Valentina";
    header("location:index.php");

   }else{
    echo "<script>alert('Usuario o clave incorrecta');</script>";
   }

}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row">
   <div class="col-md-4 ">
    
   </div>
   <div class="col-md-4 ">

   <div class="card">
    <div class="card-header">
        Iniciar Sesion
    </div>
    <div class="card-body">
    <form action="login.php" method="post">
Usuario: <input class="form control" type="text" name="Usuario" id="">
<br/>
Contraseña: <input class="form control" type="text" name="Contraseña" id="">
<br/>
<button class="btn btn-success" type="submit">Ingresar al portafolio</button>


</form>
        <h4 class="card-title"></h4>
        <p class="card-text"></p>
    </div>
    <div class="card-footer text-muted">
        
    </div>
   </div>



   </div>
   <div class="col-md-4 ">
</div>


</div>


</body>

</html>