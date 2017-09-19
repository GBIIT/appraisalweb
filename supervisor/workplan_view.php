<?php
session_start();


if($_SESSION['sup_id']==""){
 header("location: ../index.php");
}

include_once '../dbconnect.php';


?>

<!DOCTYPE HTML>
<html>
<head>

  <!-- Website Title & Description for Search Engine purposes -->
    <title>Workplan</title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--     <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
    
    <!-- Custom CSS -->
   
    
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Appraisal. System</title>
<script type="text/javascript">
function adjust_textarea(h) {
    h.style.height = "auto";
	h.style.width ="100%";
	
    h.style.height = (h.scrollHeight)+"px";
   
}
</script>
<style type="text/css">

.form-style-4{
	max-width: 800px;
	margin:10px auto;
	font-size: 16px;
	background: #495C70;
	padding: 30px 30px 15px 30px;
	border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	float: left;
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=date],
.form-style-4 input[type=datetime],
.form-style-4 input[type=number],
.form-style-4 input[type=search],
.form-style-4 input[type=time],
.form-style-4 input[type=url],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	overflow: hidden;
	resize:none;
	
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=date]:focus,
.form-style-4 input[type=datetime]:focus,
.form-style-4 input[type=number]:focus,
.form-style-4 input[type=search]:focus,
.form-style-4 input[type=time]:focus,
.form-style-4 input[type=url]:focus,
.form-style-4 input[type=email]:focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
</style>
</head>

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


      <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li>
          <a href="index.php" id="logoname"><i class="fa fa-home"></i> Home</a>

        </li>
      </ul>
      
      
    

<!-- 
<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="performance_assessment.php" id="logoname"><i class="fa fa-file-word-o"></i> Assessment</a>

        </li>
      </ul> -->


<!-- <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="" id="logoname"><i class="fa fa-spinner"></i> Work Plan</a>

        </li>
      </ul>
 -->


<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="publication_guide.php" id="logoname"><i class="fa fa-bookmark-o"></i> Publication Guide</a>

        </li>
      </ul>




<ul class="nav navbar-nav pull-left" style="padding-top: 0.5em">
      <li>
      <a href="#"></a>
      </li>


      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="logoname">
<i class="fa fa-search-plus"></i>
          View
          </a>
          
          <ul class="dropdown-menu">
            <li>
              <a href="self_view.php">View Self</a>
            </li>
            
            <li class="divider"></li>
            
            <li>
              <a href="lecturer_view.php"> View Lecturer</a>
            </li>

             <li class="divider"></li>
             <li>
              <a href=""> View Workplan</a>
            </li>
          </ul>
        </li>


      </ul><!-- end nav pull-right -->






     <!--  <ul class="nav navbar-nav pull-right">
      <li>
      <a href="#"><span id="gylpfont"  class="glyphicon glyphicon-envelope"></span></a>
      </li>



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="gylpfont" class="glyphicon glyphicon-user"></span>Log Out <strong class="caret"></strong></a>
          
          <ul class="dropdown-menu">
            <li>
              <a href="#"></a>
            </li>
            
            <li class="divider"></li>
            
            <li>
              <a href="#"><span class="glyphicon glyphicon-off"></span> log out</a>
            </li>
          </ul>
        </li>


      </ul>-->








<ul class="nav navbar-nav pull-left" style="padding-top: 0.5em">
      <li>
      <a href="#"></a>
      </li>
        
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="logoname">
          Welcome, <?php echo $_SESSION['usr_name']; ?>
          </a>
          
          <ul class="dropdown-menu">
            <li>
             <a href="../logout.php">Logout</a>
            </li>

      </ul>
</ul>




    </div><!-- end nav-collapse -->
  </div><!-- end container -->
</div><!-- end navbar -->





<form class="form-style-4" action="" method="post" style="margin-top: 5em;">
<label for="field1">
	<center>Work Plan</center
	<br>


<span>Your Work Plan</span><br><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
</label>
<label>
<span>&nbsp;</span><input type="submit" value="save" />
</label>
</form>



<script src="http://code.jquery.com/jquery.js"></script>
  
  <!-- If no online access, fallback to our hardcoded version of jQuery -->
  <script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
  
  <!-- Bootstrap JS -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Custom JS -->
  <script src="includes/js/script.js"></script>



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
