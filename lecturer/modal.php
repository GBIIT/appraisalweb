<?php
session_start();
include_once '../dbconnect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../bootstrap/css/mycss.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

$id = $_GET["lecturer_id"]; 

$sql = "SELECT * FROM cat_a WHERE lecturer_id= $id";
$sql1 = "SELECT * FROM cat_b WHERE lecturer_id= $id";
$sql2 = "SELECT * FROM cat_c WHERE lecturer_id= $id ";

$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

$result1 = mysqli_query($con, $sql1);
$data1 = mysqli_fetch_assoc($result1);

$result2 = mysqli_query($con, $sql2);
$data2 = mysqli_fetch_assoc($result2);
?>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appraisal System</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <table class='bordered'>
  <!--    <tr> 
        <th></th>
        <th>Lecturer Id</th>
        <th><?php echo $id ?></th>
        <th>Lecturer Name</th> 
        <th></th>       
      </tr> -->
    <thead>
     

      <tr> 
        <th>No</th>
        <th>Category</th>        
        <th>Rating</th>
        <th>Score</th>   
        <th>% Score</th>     
      </tr>
      
      <tr>
          <th></th> 
          <th><strong>A: Teaching, Supervision and  Mentoring** </strong></th>
          <th></th>
          <th><?php echo $data['total_score']; ?></th>
          <th><?php echo $data['percentage_score']; ?></th>
      </tr>  

       <tr>
        <th>1</th> 
        <td>Integrate course content with theory and practice</td>
        <td><?php echo $data['integrate']; ?></td>
        <th></th>
        <th></th>
             
      </tr>

      <tr> 
        <th>2</th> 
        <td>Develop innovative courses, teaching material</td>
        <td><?php echo $data['develop']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>3</th> 
        <td>Incorporate practioners' forum and field trips</td>
        <td><?php echo $data['incorporate']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>4</th> 
        <td>Integrating case studies, supplementary audio </td>
        <td><?php echo $data['integrating']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>5</th> 
        <td>Supervise students' internship activities and reports</td>
        <td><?php echo $data['supervise']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>6</th> 
        <td>Mentor students; supervise theses and projects</td>
        <td><?php echo $data['mentor']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>7</th> 
        <td>Students' evaluation of faculty</td>
        <td><?php echo $data['students']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>8</th> 
        <td>Faculty evaluation by peers (not applicable to 2012/2013)</td>
        <td><?php echo $data['faculty_evaluation']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>9</th> 
        <td>Faculty Class attendance and punctulaity</td>
        <td><?php echo $data['faculty_class']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>10</th> 
        <td>Timely submission of examination results (not applicable to 2012/2013)</td>
        <td><?php echo $data['timely']; ?></td>
        <th></th>
        <th></th>
      </tr>



        <tr>
          <th></th> 
          <th><strong>B: Research, Publication and Scholarship*** </strong></th>
          <th></th>
          <th><?php echo $data1['total_score']; ?></th>
          <th><?php echo $data1['percentage_score']; ?></th>
      </tr>  

       <tr>
        <th>1</th> 
        <td>"A"-Ranking article or schloarly book (4.50 - 5.00)</td>
        <td><?php echo $data1['a_ranking']; ?></td>
        <th></th>
        <th></th>
             
      </tr>

      <tr> 
        <th>2</th> 
        <td>"B"-Ranking article or schloarly book (3.75 - 4.00)</td>
        <td><?php echo $data1['b_ranking']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>3</th> 
        <td>"C"-Ranking article or schloarly book (3.00 - 3.50)</td>
        <td><?php echo $data1['c_ranking']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>4</th> 
        <td>"D"-Ranking article or schloarly book (2.50 - 2.90)</td>
        <td><?php echo $data1['d_ranking']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>5</th> 
        <td>Refreed conference proceeding article/book chapter/case (2.00 - 2.40)</td>
        <td><?php echo $data1['refreed']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>6</th> 
        <td>Conference/workshop/seminar presentation (1.0 -1.90)</td>
        <td><?php echo $data1['conference']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>7</th> 
        <td>No Evidence of Activity (0.00)</td>
        <td><?php echo $data1['no_evidence']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr>
          <th></th> 
          <th><strong>C: Service** </strong></th>
          <th></th>
          <th><?php echo $data2['total_score']; ?></th>
          <th><?php echo $data2['percentage_score']; ?></th>
      </tr>  

       <tr>
        <th>1</th> 
        <td>School/Unit/Depart</td>
        <td><?php echo $data2['school_unit']; ?></td>
        <th></th>
        <th></th>
             
      </tr>

      <tr> 
        <th>2</th> 
        <td>GIMPA and its Community</td>
        <td><?php echo $data2['gimpa']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>3</th> 
        <td>Community Outside GIMPA/Country</td>
        <td><?php echo $data2['community']; ?></td>
        <th></th>
        <th></th>
      </tr>

      <tr> 
        <th>4</th> 
        <td>Profession</td>
        <td><?php echo $data2['profession']; ?></td>
        <th></th>
        <th></th>
      </tr>

    </thead> 
  </table>
      </div>
      <div class="modal-footer">
         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Print Data</button>
      </div>
   


</body>
</html>
