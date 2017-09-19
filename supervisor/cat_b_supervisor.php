<?php
session_start();


if($_SESSION['sup_id']==""){
 header("location: ../index.php");
}

include_once '../dbconnect.php';

if(isset($_POST['save'])){
  $lecturer_id= mysqli_real_escape_string($con, $_POST['lecturer_id']);
   $a_ranking = mysqli_real_escape_string($con, $_POST['a_ranking']);
   $b_ranking = mysqli_real_escape_string($con, $_POST['b_ranking']);
   $c_ranking = mysqli_real_escape_string($con, $_POST['c_ranking']);
   $d_ranking = mysqli_real_escape_string($con, $_POST['d_ranking']);
   $refreed = mysqli_real_escape_string($con, $_POST['refreed']);
   $conference = mysqli_real_escape_string($con, $_POST['conference']);
   $no_evidence = mysqli_real_escape_string($con, $_POST['no_evidence']);
   $total_score = mysqli_real_escape_string($con, $_POST['total_score']);
   $percentage_score = mysqli_real_escape_string($con, $_POST['percentage_score']);
   $qualitative_rating = mysqli_real_escape_string($con, $_POST['qualitative_rating']);
   $composition_of_weighted_score = mysqli_real_escape_string($con, $_POST['composition_of_weighted_score']);
    $academic_yr = mysqli_real_escape_string($con, $_POST['academic_yr']);
   $role_id = $_SESSION['role_id'];
   $lecturer_id= mysqli_real_escape_string($con, $_SESSION['sup_id']);
    $dept_id = $_SESSION['dept'];
 
        if(mysqli_query($con, "INSERT INTO cat_b(lecturer_id,role_id,academic_yr,dept_id,a_ranking,b_ranking,c_ranking,d_ranking,refreed,conference,
          no_evidence,total_score,percentage_score,qualitative_rating,composition_of_weighted_score) VALUES('" . $lecturer_id . "', '" . $role_id . "', '" . $academic_yr . "', '" . $dept_id . "', '" . $a_ranking . "', '" . $b_ranking . "',
           '" . $c_ranking . "', '" . $d_ranking . "', '" . $refreed . "', '" . $conference . "', '" . $no_evidence . "', '" . $total_score . "', '" . $percentage_score . "', '" . $qualitative_rating . "', '" . $composition_of_weighted_score . "')")) {
            $successmsg = "Saved Success!";
      
      } else {
            $errormsg = "Error in saving...Please try again!";
        }
      
    }

    $sql = "SELECT lecturer_id FROM users WHERE dept_id='".$_SESSION['dept']."' and role_id = 2";
      $result = mysqli_query($con,$sql);

?>


 <!DOCTYPE html>
 <html>
  <head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title>Research, Publication and Scholarships</title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../styleindex.css">

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
          <a href="index.php" id="logoname"><i class="fa fa-home"></i> Home</a>

        </li>
      </ul>
      
      
    


<!-- <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="../performance_assessment.php" id="logoname"><i class="fa fa-file-word-o"></i> Assessment</a>

        </li>
      </ul> -->






<!-- <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="../workplan.php" id="logoname"><i class="fa fa-spinner"></i> Work Plan</a>

        </li>
      </ul> -->






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
              <a href="lecturer_view.php"> View Lectuerer</a>
            </li>

               <li class="divider"></li>
            
            <li>
              <a href="workplan_view.php"> View workplan</a>
            </li>
          </ul>
        </li>


      </ul><!-- end nav pull-right -->


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

    

  

    <div class="container" style="margin-top: 7em;">
 
 	
 	<form id="cat_b_supervisor" name="cat_b_supervisor" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>


        <div class="row">
<div class="col-lg-4">
    <legend style="font-weight: bold; font-size: 1.3em;">Research, Publication and Schorlaship</legend>
    </div>

    <div class="col-lg-4">

     <p style="font-weight: bold; font-size: 1.1em; width:15em;">
     <select name="academic_yr" id="academic_yr" class="form-control">       
      <option value="0">Select Academic Year</option>
        <option>2015/2016</option>
        <option>2016/2017</option>
        <option>2017/2018</option>
      </select>
    </p>

    </div>

<?php

  $sql = "SELECT lecturer_id FROM users WHERE dept_id='".$_SESSION['dept']."' and role_id= 2";
      $result = mysqli_query($con,$sql);

  ?>
    <div class="col-lg-4">
<p style="font-weight: bold; font-size: 1.1em; width:15em;">
    <select name="lecturer_id" id="lecturer_id" class="form-control">
        <option value = "0">Select Lecturer ID</option>
           <?php while($row = mysqli_fetch_array($result)){ ?>
       <?php echo "

                    <option>{$row['lecturer_id']}</option>

       "  ; ?>

     <?php }
?>

    </select>
  </p>

    
    </div>
  

  </div>








<br>
     <div class="row">
  
  <div class="col-lg-6">


  <p>
    <label for="a_ranking">1. "A"-Ranking article or schloarly book (4.50 - 5.00)</label>
    <input type="number" name="a_ranking" id="a_ranking" placeholder="Enter Assigned weight" max="5.00" min="0" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>
  <br>
  
  <p>
  <label for="b_ranking">2. "B"-Ranking article or schloarly book (4.50 - 5.00)</label>
    <input type="number" name="b_ranking" id="b_ranking" placeholder="Enter Assigned weight" max="4" min="0" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>

<br>

  <p>
    <label for="c_ranking">3. "C"-Ranking article or schloarly book (3.00 - 3.50)</label>
    <input type="number" name="c_ranking" id="c_ranking" placeholder="Enter Assigned weight" max="3.5" min="0" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>

<br>

  <p>
    <label for="d_ranking">4. "D"-Ranking article or schloarly book (2.50 - 2.90)</label>
    <input type="number" name="d_ranking" id="d_ranking" placeholder="Enter Assigned weight" max="2.9" min="0" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>

  </div>




     <div class="row">
  
  <div class="col-lg-6">

   <p>
    <label for="refreed">5. Refreed conference proceeding article/book chapter/case (2.00 - 2.40)</label>
    <input type="number" name="refreed" id="refreed" placeholder="Enter Assigned weight" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>
  
  <p>
    <label for="conference">6. Conference/workshop/seminar presentation (1.0 -1.90)</label>
    <input type="number" name="conference" id="conference" placeholder="Enter Assigned weight" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>

  <p>
    <label for="no_evidence">7. No Evidence of Activity (0.00)</label>
    <input type="number" name="no_evidence" id="no_evidence" placeholder="Enter Assigned weight" onchange="calc()" class="form-control input-lg" style="width:20em;"/>
  </p>


</div>
</div>



<br>
<br>




 <input type="hidden" id="operator" value="+" class="form-control input-lg" style="width:20em;">

<!-- <div class="col-lg-1">
  <button onclick="calc();" class="btn btn-primary btn-lg" style="margin-top: 1.6em;">Total</button>
  </div>
 -->

<input type="hidden" id="percentage" value="%">

<div class="col-lg-2">
  <label>Score(%)</label>
  <input type="text" id="percentage_score" name="percentage_score" readonly class="form-control input-lg" style="width:10em;"/>

  </div>

<div class="col-lg-2">
      <label>Qualitative Rating</label>
      <input type="text" id="qualitative_rating" name="qualitative_rating" readonly class="form-control input-lg" style="width:10em;"/>

      </div>

<div class="col-lg-3">
      <label>Composition of weighted score</label>
      <input type="text" id="composition_of_weighted_score" name="composition_of_weighted_score" readonly class="form-control input-lg" style="width:10em;"/> <br>
</div>


  <div class="col-lg-2">
<label>Total Score</label>
  <input type="text" id="total_score" name="total_score" readonly class="form-control input-lg" style="width:10em;"/>
</div>

       <input type="submit" id="save" name="save" value="Save" class="btn btn-lg btn-primary" style="margin-top: 1.5em;">
 
</form>

<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
  <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>


 </body>

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



    <script>
    
   function calc()
    {
      var a_ranking = parseFloat(document.getElementById('a_ranking').value);
      var b_ranking = parseFloat(document.getElementById('b_ranking').value);
      var c_ranking = parseFloat(document.getElementById('c_ranking').value);
      var d_ranking = parseFloat(document.getElementById('d_ranking').value);
      var refreed = parseFloat(document.getElementById('refreed').value);
      var conference = parseFloat(document.getElementById('conference').value);
      var no_evidence = parseFloat(document.getElementById('no_evidence').value);
 
      var oper = document.getElementById('operator').value;
      var percentage = document.getElementById('percentage').value;

      if (oper=== '+')
       {
       document.getElementById('total_score').value = (a_ranking*40)+(b_ranking*40)+(c_ranking*40)+(d_ranking*40)+(refreed*40)+(conference*40)+(no_evidence*40);
        
      }

      if (percentage=== '%') 
      {
        document.getElementById('percentage_score').value = ((total_score.value/200)*100);
      }

            var cat_b_supervisor = parseInt(document.getElementById('percentage_score').value);
 if(cat_b_supervisor > 79)
 {
    document.getElementById('qualitative_rating').value = "Excellent";
 }
 else if(cat_b_supervisor >= 69.5){
  document.getElementById('qualitative_rating').value = "Very Good";
 }
  else if(cat_b_supervisor >= 59.5){
  document.getElementById('qualitative_rating').value = "Good";
 }
  else if(cat_b_supervisor >= 50){
  document.getElementById('qualitative_rating').value = "Marginal";
 }
  else if(cat_b_supervisor < 50){
  document.getElementById('qualitative_rating').value = "Unacceptable";
 }

  document.getElementById('composition_of_weighted_score').value = ((40*percentage_score.value)/100);
  }
 

  </script>
 </html>