<?php
session_start();

if($_SESSION['lec_id']==""){
 header("location: ../index.php");
}
?>


<!doctype html>
<html>
<head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title></title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--     <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../styleindex.css">
    
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
          <a href="#" style="font-size: 1.3em; color: #212121; font-weight: bold"><img src="images/111.png"/> Gimpa Appraisal System</a>

        </li>
      </ul>


      <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li>
          <a href="index.php" id="logoname"><i class="fa fa-home"></i> Home</a>

        </li>
      </ul>
      
      
    


<!-- <ul class="nav navbar-nav" style="padding-top: 0.5em">
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
          <a href="" id="logoname"><i class="fa fa-bookmark-o"></i> Publication Guide</a>

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



<div class="datagrid container" style="margin-top: 7em">

<table width="746" border="1">
  <tbody>
    <tr>
      <td width="189">Publication Category</td>
      <td width="103">Journal Ranking</td>
      <td width="107">No. of Publications</td>
      <td width="103">Assigned Weight(%)</td>
      <td width="106">Rating</td>
      <td width="98">Score(%)</td>
    </tr>
    <tr>
      <td rowspan="4"><p>Professional peer-reviewed journal article/schorlarly book</p></td>
      <td rowspan="4">D</td>
      <td height="26">1</td>
      <td>40</td>
      <td>3.00</td>
      <td>60.00</td>
    </tr>
    <tr>
      <td>More than 2</td>
      <td>40</td>
      <td>2.90</td>
      <td>58.00</td>
    </tr>
    <tr>
      <td>2</td>
      <td>40</td>
      <td>2.75</td>
      <td>55.00</td>
    </tr>
    <tr>
      <td>1</td>
      <td>40</td>
      <td>2.50</td>
      <td>50.00</td>
    </tr>
    <tr>
      <td rowspan="3">Reference readinf, article or book chapter or case</td>
      <td rowspan="3">E</td>
      <td>More than 2</td>
      <td>40</td>
      <td>2.40</td>
      <td>48.00</td>
    </tr>
    <tr>
      <td>2</td>
      <td>40</td>
      <td>2.25</td>
      <td>45.00</td>
    </tr>
    <tr>
      <td>1</td>
      <td>40</td>
      <td>2.00</td>
      <td>40.00</td>
    </tr>
    <tr>
      <td rowspan="3">Conference/workshop/seminar presentation</td>
      <td rowspan="3">F</td>
      <td>More than 2</td>
      <td>40</td>
      <td>1.90</td>
      <td>38.00</td>
    </tr>
    <tr>
      <td>2</td>
      <td>40</td>
      <td>1.50</td>
      <td>30.00</td>
    </tr>
    <tr>
      <td>1</td>
      <td>40</td>
      <td>1.00</td>
      <td>20.00</td>
    </tr>
    <tr>
      <td>No evidence of activity</td>
      <td>Z</td>
      <td>0</td>
      <td>40.00</td>
      <td>0.00</td>
      <td>0.00</td>
    </tr>
  </tbody>
</table>
</div>


<script src="http://code.jquery.com/jquery.js"></script>
  
  <!-- If no online access, fallback to our hardcoded version of jQuery -->
  <script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
  
  <!-- Bootstrap JS -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  
  <!-- Custom JS -->
  <script src="includes/js/script.js"></script>



   <style type="text/css">
    
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00557F; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEf4; color: #00557F; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEf4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #00557F; color: #FFFFFF; background: none; background-color:#006699;}div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }


  </style>



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
