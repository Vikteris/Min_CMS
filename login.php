<?php
ob_start();
session_start();


//LOGIN REDIRECT

$msg = '';
$redirect_action = 0;
if ((isset($_POST['login']) && !empty($_POST['username'])
   && !empty($_POST['password'])) || !isset($_POST['login'])) {

   if (
      $_POST['username'] == 'admin' &&
      $_POST['password'] == 'admin'
   ) {
      $_SESSION['valid'] = true;
      $_SESSION['username'] = 'admin';

      $redirect_action++;
   }
};

if ($redirect_action) {
   header('Location: index.php');
}

?>

<html lang="en">

<head>
   <link rel="stylesheet" href="style.css">
   <title>CMS</title>
</head>

<body>

   <h2>Enter Username and Password</h2>
   <div class="container form-signin">

      <form class="form-signin" action="index.php" method="post">
         <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
         <input type="text" class="form-control" name="username" value="admin" placeholder="admin" required autofocus></br>
         <input type="password" class="form-control" name="password" value="admin" placeholder="admin" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="true">Login</button>
      </form>
   </div>
</body>

</html>