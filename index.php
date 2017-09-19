<?php
session_start();


include_once 'dbconnect.php';

   $result = mysqli_query($con, "SELECT * FROM users");
    while($row = mysqli_fetch_array($result)){
       //check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
 
    if ($email==$row['email'] && ($password) == $row['password'] && $row['role_id']== 1 ) {
        $_SESSION['sup_id'] = $row['lecturer_id'];
        $_SESSION['usr_name'] = $row['name'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['dept'] = $row['dept_id'];
        header("Location: supervisor/index.php");
    } 
    else if($email==$row['email'] && ($password) == $row['password'] && $row['role_id']== 2) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['lec_id'] = $row['lecturer_id'];
        $_SESSION['usr_name'] = $row['name'];
        $_SESSION['role_id'] = $row['role_id'];
        $_SESSION['dept'] = $row['dept_id'];
        header("Location: lecturer/index.php");
    }
    else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
    }


?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Appraisal System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<!-- Banner -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content" style="margin-top: -5em;">

<section class="wrapper style1 align-center">
						<div class="inner medium">
							<h2>System Login</h2>
							<form id="login_form" name="login_form" autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<div class="col-lg-12">
									<label for="name">Email</label>
									<input type="text" name="email" id="name" required="true" value="" />
								</div>

								<div class="col-lg-12">
									<label for="email">Password</label>
									<input type="password" name="password" required="true" value="" />
								</div>


								<ul class="actions vertical">
							
								  <input type="submit" name="login" id="login" value="Login" class="button big wide smooth-scroll-middle"/>

							</ul>

	 <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

								
							</form>

						</div>
					</section>











						</div>
						<div class="image">
						<a href="registration.php">
							<img src="images/pre.jpg" alt="" />
							</a>

						</div>

					</section>

				
				<!-- Footer -->
				<!-- 	<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							
						</div>
					</footer> -->

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	
	</body>
</html>
