
<!DOCTYPE html>
<!-- saved from url=(0059)https://getbootstrap.com/docs/4.0/examples/floating-labels/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Imgs/Logo_proceder.JPG">
    <title>Proceder A.C</title>

    <!-- Bootstrap core CSS -->
    <link href="./login1_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./login1_files/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <?php
        include "checkRegister.php";
      ?>
      <form class="form-signin" method="POST" function="checkRegister.php">
        <?php include('errors.php'); ?>
        <div class="text-center mb-4">
          <img class="mb-4" src="Imgs/Logo_proceder.JPG" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
          <p>User Login example by: PZ </p>
        </div>
        <div class="form-label-group">
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="" value="<?php echo $username ?>">
          <label for="username">Username</label>
        </div>
        <div class="form-label-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
          <label for="password">Password</label>
        </div>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">No account? <a href="register.php">Create one!</a></p>
        <p class="mt-5 mb-3 text-muted text-center">© 2018 - By: <a href="https://tejuinoexe.com">tejuinoexe.com</a></p>
      </form>
    </div>
  </body>
</html>