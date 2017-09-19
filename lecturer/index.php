 <?php

session_start();

if($_SESSION['lec_id']==""){
 header("location: ../index.php");
}
?>
 <!DOCTYPE html>

<html>
  <head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title>Home</title>
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
          <a href="#" style="font-size: 1.3em; color: #212121; font-weight: bold"><img src="../images/111.png"/> Gimpa Appraisal System</a>

        </li>
      </ul>


      <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li>
          <a href="#" id="logoname"><i class="fa fa-home"></i> Home</a>

        </li>
      </ul>
      
      
    

<!-- 
<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="performance_assessment.php" id="logoname"><i class="fa fa-file-word-o"></i> Assessment</a>

        </li>
      </ul> -->






<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="workplan.php" id="logoname"><i class="fa fa-spinner"></i> Work Plan</a>

        </li>
      </ul>






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
              <a href="supervisor_view.php"> View Supervisor</a>
            </li>
                <li class="divider"></li>
             <li>
              <a href="hr_view.php"> View HR</a>
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



<div class="container" style="margin-top: 6em;">
<img src="../images/gimpa.jpg" style="margin-left: 35em;">
<p align="center" style="color:#212121; font-weight: bold; font-size: 2em;">Welcome to Gimpa Appraisal System</p>
<p align="center" style="color:#0d47a1;">Evaluate with ease <i class="fa fa-thumbs-up"></i></p>


<br>
<br>
<div class="row">
<div class="col-lg-4">

<div class="panel panel-default">
<br>

<i class="fa fa-mortar-board" id="icoon" style="opacity: 0.9;"></i>
<br>
<br>
    <p style="color:#0d47a1; font-size: 1.2em;" align="center">Supervision, Teaching and Mentoring</p>
    <br>
    <a href="cat_a.php" class="btn btn-primary" style="border-radius: 5em;margin-left: 11em;"><i class="fa fa-arrow-right" ></i></a>
</div>



</div>













<div class="col-lg-4">



<div class="panel panel-default">
<br>

<i class="fa fa-newspaper-o" id="icoon" style="opacity: 0.9;"></i>
<br>
<br>
    <p style="color:#0d47a1; font-size: 1.2em;" align="center">Research, Publication and Scholarship</p>
    <br>
    <a href="cat_b.php" class="btn btn-success" style="border-radius: 5em;margin-left: 11em;"><i class="fa fa-arrow-right"></i></a>
</div>


</div>
















  
<div class="col-lg-4">


<div class="panel panel-default" style="opacity: 0.9;">
<br>
<i class="fa fa-scribd" id="icoon"></i>
<br>
<br>

    <p style="color:#0d47a1; font-size: 1.2em;" align="center">Service</p>
    <br>
<a href="cat_c.php" class="btn btn-primary" style="border-radius: 5em;margin-left: 11em;"><i class="fa fa-arrow-right"></i></a>
</div>



</div>














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