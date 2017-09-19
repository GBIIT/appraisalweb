<?php
session_start();

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $lecturer_id = mysqli_real_escape_string($con, $_POST['lecturer_id']);
    $dept = mysqli_real_escape_string($con, $_POST['dept']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

//name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,lecturer_id,role_id,dept_id,email,password) VALUES('" . $name . "', '" . $lecturer_id . "', '" . $role . "', '" . $dept . "', '" . $email . "', '" . $password . "')")) {
            $successmsg = "Successfully Registered! <a href='index.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title>Register</title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--     <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../styleindex.css">
    
    <!-- Custom CSS -->
    </head>







<link rel="stylesheet" type="text/css" href="registration.css">
<body>




 <div class="navbar navbar-fixed-top" id="navi">
  <div class="container">
    
    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
    <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="nav-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li  style="background-color: #fff">
          <a href="#" style="font-size: 1.3em; color: #212121; font-weight: bold"><img src="images/111.png"/> Gimpa Appraisal System</a>

        </li>
      </ul>





    </div><!-- end nav-collapse -->
  </div><!-- end container -->
</div><!-- end navbar -->





  <div class="container" style="margin-top: 7em;">
    <p align="center" style="font-size: 1.5em; font-weight: bold">Enter Registration Details</p>
<form id="registration" name="registration" method="post" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>


    
    <div class="col-lg-4">
    </div>

    <div class="col-lg-4">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Enter Your Name" required value="<?php if($error) echo $name; ?>" class="form-control"/>
       <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
    <br>

    <div>
      <label for="lecturer_id">Lecturer ID:</label>
      <input type="text" name="lecturer_id" id="lecturer_id" placeholder="Enter ID" required  class="form-control" />
    </div>
  </p>
  

  <p>
  <div class="form-group">
    <label for="role"> Role:</label>
      <select name="role" id="role" required class="form-control"/>
        <option value="0">Select Role</option>
        <option value="1">Supervisor</option>
        <option value="2">Appraisee</option>
        <option value="3">HR</option>
      </select>
  </div>

     <div class="form-group">
    <label for="dept"> School/Dept:</label>
      <select name="dept" id="dept" required class="form-control"/>
        <option value="0">Select School</option>
        <option value="1">School of Technology</option>
        <option value="2">Bussines School</option>
        <option value="3">Law School</option>
        <option value="4">Public School</option>
      </select>
  </div>
  </p>
 
  <p>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>

    </div>
   
    
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password" required class="form-control" />
      <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
<!-- 
    <div class="form-group">
      <label for="password">Confirm Password</label>
      <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required class="form-control" />
      <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
    </div> -->
  
  </p>
  
    <p>

    <div class="form-group">
      <input type="submit" name="register" id="register" value="Register" class="btn btn-lg btn-block btn-primary" />
    </p>
    </div>

    <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>


</div>

  <div class="col-lg-4">

<div class="row">
        <div class="already_registered" style="margin-left: 2em;">    
        Already Registered <a href="index.php" style="text-decoration: none;">
  <i class="fa fa-question-circle"></i>      Login Here</a>
        </div>
</div>
    </div>

  
</form>
</div>








 <style type="text/css">

  body{
    font-family: Roboto;
  }

   #headingz{
  margin-left: 14em;
  font-size: 2em;
  
}


#navi{
  background-color:#0d47a1;
  border-bottom: 3px solid #76ff03;
  box-shadow: 2px 2px 2px grey;

}

#logoname{

  font-size: 1.2em;
  color: #fff;
}

#logoname:hover{
  color: #76ff03;
}

#icoon{
  font-size: 6em;
  margin-left: 1.5em;
}
  </style>

</body>
</html>