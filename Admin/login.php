<?php
 include "includes/config.php";
  session_start(); 
?>
<?php 


if (!isset($_SESSION['user'])){
	


if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$fire = mysqli_query($connect,$query);

	if($fire) {
		

	      if(mysqli_num_rows($fire) == 1) {
           
           // session_start();
           $_SESSION['user'] = true;
           $_SESSION['username'] = $username;

           header("Location: admin.php");

           echo "<center><h4 style='color:green'>Success</h4></center>";

	}else{

   $vali = '<div id="alert1" class="container col-sm-12 col-lg-6 alert alert-danger"> 
           Username or password is invalid!
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           </div>';
	}

 }

}

}else{
	header("Location: dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAMASTE FOODIST</title>
    <link rel="stylesheet" href="css/signstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  </head>

  <body class="login">
  <div class="signin container">
            <div class="signintab">
                <div class="row">
                    <div class="col">
                        <img src="images/admin.png" alt="loginhero">
                    </div>
                    <div class="col">
                        <h2>Sign in</h2>
                        <form action="" method="post" class="mt-5">
                          <div class="mb-3">
                            <i class="fa-solid fa-user mt-2"></i>
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="  Enter your Username">
                          </div>
                          <div class="mb-3">
                            <i class="fa-solid fa-lock mt-2"></i>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="  Password">
                          </div>
                          <button type="login" name="login" class="btn mt-3">Login</button>
                          <div class="mb-3 mt-5 d-flex">
                            <a href="../user/home.php" class="text-black text-decoration-none fw-semibold">Go to Website</a>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
