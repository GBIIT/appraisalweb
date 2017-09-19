<?php
session_start();

if($_SESSION['lec_id']==""){
 header("location: ../index.php");
}
include '../dbconnect.php';

if(isset($_POST['save'])){
   $school_unit= $_POST['school_unit'];
   $gimpa = $_POST['gimpa'];
   $community = $_POST['community'];
   $profession = $_POST['profession'];
   $total_score = $_POST['total_score'];
   $percentage_score = $_POST['percentage_score'];
   $academic_yr = $_POST['academic_yr'];
   $lecturer_id = $_SESSION['lec_id'];
   $role_id = $_SESSION['role_id'];
   $dept_id = $_SESSION['dept'];

   $sql = "INSERT INTO cat_c(lecturer_id,role_id,academic_yr,dept_id,school_unit,gimpa,community,profession,total_score,percentage_score) VALUES('$lecturer_id','$role_id','$academic_yr',$dept_id,'$school_unit','$gimpa','$community','$profession','$total_score','$percentage_score')";
   
        if(mysqli_query($con, $sql)) {
            $successmsg = "Saved Success!";
      
      } else {
            $errormsg = "Error in saving...Please try again!";
        }
      
    }


?>


 <!DOCTYPE html>
 <html>
  <head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title>Services</title>
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
          <a href="index.php" id="logoname"><i class="fa fa-home"></i> Home</a>

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
          <a href="../publication_guide.php" id="logoname"><i class="fa fa-bookmark-o"></i> Publication Guide</a>

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

 	<form id="cat_c" name="cat_c" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

  
        <div class="row">
<div class="col-lg-4">
    <legend style="font-weight: bold; font-size: 1.5em;">Service</legend>
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
<!-- 
<?php

  $sql = "SELECT lecturer_id FROM users WHERE school_dept='".$_SESSION['dept']."' and status='Appraisee'";
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
 -->



<br>
     <div class="row">
  
  <div class="col-lg-6">
  

  </div>
  </div>

     <div class="row">
  
  <div class="col-lg-6">

    <p>
    <label for="school_unit">1. School/Unit/Depart</label>
    <input type="number" name="school_unit" id="school_unit" placeholder="Enter Assigned weight" max="5.00" min="0" title="maximum weight is 5" onchange="calc()" class="form-control input-lg"/>
  </p>
  <br>
  
  <p>
  <label for="gimpa">2. GIMPA and its Community</label>
    <input type="number" name="gimpa" id="gimpa" placeholder="Enter Assigned weight" max="5" min="0" title="maximum weight is 5" onchange="calc()" class="form-control input-lg"/>
  </p>
  <br>


  <p>
    <label for="community">3. Community Outside GIMPA/Country</label>
    <input type="number" name="community" id="community" placeholder="Enter Assigned weight" max="5" min="0" title="maximum weight is 5" onchange="calc()" class="form-control input-lg"/>
  </p>
<br>
  <p>
    <label for="profession">4. Profession</label>
    <input type="number" name="profession" id="profession" placeholder="Enter Assigned weight" max="5" min="0" title="maximum weight is 5" onchange="calc()" class="form-control input-lg"/>
  </p>
   

  </div>

</div>
<br>
<br>




 <input type="hidden" id="operator" value="+" class="form-control input-lg" style="width:20em;">
<!-- 
<div class="col-lg-1">
  <button onclick="calc();" class="btn btn-primary btn-lg" style="margin-top: 1.6em;">Total</button>
  </div>
 -->

<input type="hidden" id="percentage" value="%">

<div class="col-lg-2">
  <label>Score(%)</label>
  <input type="text" id="percentage_score" name="percentage_score" readonly class="form-control input-lg" style="width:10em;"/>

  </div>
<!-- 
<div class="col-lg-2">
      <label>Qualitative Rating</label>
      <input type="hidden" id="qualitative_rating" name="qualitative_rating" readonly class="form-control input-lg" style="width:10em;"/>

      </div>

<div class="col-lg-3">
      <label>Composition of weighted score</label>
      <input type="hidden" id="composition_of_weighted_score" name="composition_of_weighted_score" readonly class="form-control input-lg" style="width:10em;"/> <br>
</div>
 -->

  <div class="col-lg-2">
<label>Total Score</label>
  <input type="text" id="total_score" name="total_score" readonly class="form-control input-lg" style="width:10em;"/>
</div>

       <input type="submit" id="save" name="save" value="Save" class="btn btn-lg btn-primary" style="margin-top: 1.5em;">
 

  <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
  <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>



</fieldset>
</form>





<script>    
    function calc()
    {
      var school_unit = parseInt(document.getElementById('school_unit').value);
      var gimpa = parseInt(document.getElementById('gimpa').value);
      var community = parseInt(document.getElementById('community').value);
      var profession = parseInt(document.getElementById('profession').value);
      
     

      var oper = document.getElementById('operator').value;
      var percentage = document.getElementById('percentage').value;

      if (oper=== '+')
       {
        document.getElementById('total_score').value = (school_unit*5)+(gimpa*5)+(community*5)+(profession*5);
      }

      if (percentage=== '%') 
      {
        document.getElementById('percentage_score').value = ((total_score.value/100)*100);
      } 
     

      var cat_c_supervisor = parseInt(document.getElementById('total_score').value);
 if(cat_c_supervisor > 79)
 {
    document.getElementById('qualitative_rating').value = "Excellent";
 }
 else if(cat_c_supervisor >= 69.5){
  document.getElementById('qualitative_rating').value = "Very Good";
 }
  else if(cat_c_supervisor >= 59.5){
  document.getElementById('qualitative_rating').value = "Good";
 }
  else if(cat_c_supervisor >= 50){
  document.getElementById('qualitative_rating').value = "Marginal";
 }
  else if(cat_c_supervisor < 50){
  document.getElementById('qualitative_rating').value = "Unacceptable";
 }

  document.getElementById('composition_of_weighted_score').value = ((20*percentage_score.value)/100);
  }



  </script>

  
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