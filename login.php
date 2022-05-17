<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/image.png" alt="IMG">
				</div>

	<form action="" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
				

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-36">
						<a class="txt2" href="registration.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<br><br><br>
				</form>
			</div>
		</div>
	</div>
	
	<?php 
  if (isset($_POST['login'])) {
    
  $email = $_POST['email'];
  $password = $_POST['password'];

  

  include 'dbCon.php';
  $con = connect();

  $emailSQL = "SELECT * FROM user_info WHERE email = '$email';";

  $passwordSQL = "SELECT * FROM user_info WHERE email = '$email' And password = '$password';";

  $emailResult = $con->query($emailSQL);

  $passwordResult = $con->query($passwordSQL);

  if ($emailResult->num_rows <= 0) {
    echo '<script>alert("This Email Does Not Exist.")</script>';
    echo '<script>window.location="login.php"</script>';
  }else if ($passwordResult->num_rows <= 0) {
    echo '<script>alert("This Password is Incorrect.")</script>';
    echo '<script>window.location="login.php"</script>';
  }else{

    $_SESSION['isLoggedIn'] = TRUE;

    // $SQL = "SELECT * FROM restaurant_info WHERE email = '$email' And password = '$password' AND approve_status=1";

     $SQL = "SELECT * FROM user_info WHERE email = '$email' And password = '$password'";

    $result = $con->query($SQL);

    foreach ($result as $r) {
      $_SESSION['id'] = $r['id'];
      $_SESSION['name'] = $r['user_name'];   
      $_SESSION['email'] = $r['email'];
      $_SESSION['password'] = $r['password'];
      $_SESSION['role'] = $r['role'];
    }

    if ($_SESSION['role'] == 1) {
       echo '<script>window.location="dashboard/index.php"</script>';
    }elseif ($_SESSION['role'] == 2) {
      echo '<script>window.location="index.php"</script>';
    } 
    
  }

  }
?>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>