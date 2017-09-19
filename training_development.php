<!doctype html>
<html>
<head>
    
    <!-- Website Title & Description for Search Engine purposes -->
    <title></title>
    <meta name="description" content="">
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
          <a href="#" style="font-size: 1.3em; color: #212121; font-weight: bold"><img src="images/111.png"/> Gimpa Appraisal System</a>

        </li>
      </ul>


      <ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li>
          <a href="#" id="logoname"><i class="fa fa-home"></i> Home</a>

        </li>
      </ul>
      
      
    


<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="#" id="logoname"><i class="fa fa-file-word-o"></i> Assessment</a>

        </li>
      </ul>






<ul class="nav navbar-nav" style="padding-top: 0.5em">
        <li >
          <a href="#" id="logoname"><i class="fa fa-spinner"></i> Work Plan</a>

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
              <a href="#">View Self</a>
            </li>
            
            <li class="divider"></li>
            
            <li>
              <a href="#"> View Supervisor</a>
            </li>
          </ul>
        </li>


      </ul><!-- end nav pull-right -->





<ul class="nav navbar-nav pull-right" style="padding-top: 0.5em">
        <li >
          <a href="../logout.php" id="logoname">Logout</a>

        </li>
      </ul>


























    </div><!-- end nav-collapse -->
  </div><!-- end container -->
</div><!-- end navbar -->









<div class="container">
<form id="form1" name="form1" method="post" style="margin-top: 6em">
  <p><h3>SECTION IV: TRAINING AND DEVELOPMENT - COMMENTS AND PLAN</h3></p>
  <p>
    <label for="">( To be completed by the Appraiser in discussion with the appraisee)</label>
  </p>
  <p>
    <textarea name="textarea" id="textarea3"></textarea>
  </p>
  <p>
    <label for="label">Appraiser's Signature:</label>
    <input type="text" name="appraiser_signature" id="appraiser_signature">
    <label for="textfield3">Date:</label>
    <input type="date" name="date" id="date">
  </p>
  <p>
    <label for="label">Appraiser's Comments:</label>
    <textarea name="appraiser_comments" id="appraiser_comments"></textarea>
  </p>
  <p>&nbsp;</p>
  <p>
    <label for="label">Appraisee's Signature:</label>
    <input type="text" name="appraisee_signature" id="appraisee_signature">
    <label for="label">Date:</label>
    <input type="date" name="date" id="date1">
  </p>
  <p><h3>SECTION V: HEAD OF DEPARTMENT'S/DIVISION'S COMMENTS</h3></p>
  <p>
    <textarea name="textarea2" id="textarea2"></textarea>
  </p>
  <p>
    <label for="label">Head of Department's Signature:</label>
    <input type="text" name="hod_signature" id="hod_signature">
    <label for="label">Date:</label>
    <input type="date" name="date2" id="date2">
  </p>
  <p><h3>SECTION VI: MANAGEMENTS REVIEW AND RECOMMEDATIONS</h3></p>
  <p>
    <textarea name="management_review_recom" id="management_review_recom"></textarea>
  </p>
  <p>
    <input type="button" name="save" id="save" value="Save">
  </p>
</form>

</div>
<p>&nbsp;</p>
</body>



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

</html>
