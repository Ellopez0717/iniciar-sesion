<?php include 'main/conecta.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Inicio | Sesión</title>
  </head>
  <body>
     <div class="container">
          <h3 class="text-center py-4"> Inicio de Sesion</h3>
          <div class="card">
                   <p class="text-center text-muted py-3"> Por Favor ingresa tu Usuario y Password</p><hr>
               <div class="container">
                 <form class="form-group" action="main/login.php" method="post">
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                        <br>
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
                        <br>
                        <div class="col">
                             <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
                                <label class="custom-control-label" for="ver">Ver Password</label>
                             </div>
                        </div>
                        <input type="submit" name="inicio" value="Inicio" class="btn btn-success btn-sm btn-block">
                 </form>
               </div>
          </div>
     </div>
     <div class="coontainer">
           <p class="text-center">@desarrollo 505</p>
     </div>
  <script type="text/javascript">
  function verpass(cb){
     if (cb.checked)
       $('#pass').attr("type","text");
       else
       $('#pass').attr("type","password");
  }
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
