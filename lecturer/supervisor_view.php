<?php
session_start();
include_once '../dbconnect.php';

if($_SESSION['lec_id']==""){
 header("location: ../index.php");
}
?>

 <!DOCTYPE html>
 <html>
  <head>
    
   <!-- Website Title & Description for Search Engine purposes -->
    <title>Teaching, supervision and Mentoring</title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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





  <form id="cat_a" name="cat_a" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">



    <div class="row">
<div class="col-lg-4">
    <legend style="font-weight: bold; font-size: 1.3em;">Teaching, Supervision and Mentoring</legend>
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

<p>
  <?php

echo "<table class='bordered'>";
 echo "<thead>";   

   echo "<tr>"; 
    echo "<th>Lecturer ID</th> ";             
     echo "<th>Category</th>";   
      echo "<th>Academic year</th>";
      echo "<th>Action</th>";  
   echo "</tr>"; 
   echo "</thead>"; 

$sql1 = "SELECT * from cat_a  WHERE lecturer_id = '" . $_SESSION['lec_id'] . "' and role_id = '1' and dept_id = '" . $_SESSION['dept'] . "'";
$sql2 = "SELECT * from cat_b  WHERE lecturer_id = '" . $_SESSION['lec_id'] . "' and role_id = '1' and dept_id = '" . $_SESSION['dept'] . "'";
$sql3 = "SELECT * from cat_c  WHERE lecturer_id = '" . $_SESSION['lec_id'] . "' and role_id = '1' and dept_id = '" . $_SESSION['dept'] . "'";

$cata = mysqli_query($con,$sql1);
$catb = mysqli_query($con,$sql2);
$catc = mysqli_query($con,$sql3);


while($data = mysqli_fetch_assoc($cata)){ ?>
    <tr>
    <td><?php echo $data['lecturer_id']?> </td>
    <td> Category A </td>
    <td><?php echo $data['academic_yr']?> </td>
    <td><a href="modal.php?lecturer_id=<?php echo $data['lecturer_id']; ?>" data-toggle="modal" data-target="#myModal" name="try" id="try">view more</a></td>
    </tr>
<?php
  while($data = mysqli_fetch_assoc($catb)){ ?>
    <tr>
    <td><?php echo $data['lecturer_id']?> </td>
    <td> Category B </td>
    <td><?php echo $data['academic_yr']?> </td>
    <td><a href="modal.php?lecturer_id=<?php echo $data['lecturer_id']; ?>" data-toggle="modal" data-target="#myModal">view more</a></td>
    </tr>
    <?php
    while($data = mysqli_fetch_assoc($catc)){ ?>
   <tr>
    <td><?php echo $data['lecturer_id']?> </td>
    <td> Category C </td>
    <td><?php echo $data['academic_yr']?> </td>
    <td><a href="modal.php?lecturer_id=<?php echo $data['lecturer_id']; ?>" data-toggle="modal" data-target="#myModal">view more</a></td>
    <!-- <td><a href='' data-toggle="modal" data-target="#myModal">view more</a></td> -->
    </tr>
  <?php
    }
  }
}
?>

</table>


</p>  


    </div>
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


/*==============================*/

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: lime;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

}

/*==============================*/
  </style>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
     
    </div>
  </div>
</div>

   </body>
 </html>