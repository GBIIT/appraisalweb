<?php
session_start();


if($_SESSION['lec_id']==""){
 header("location: ../index.php");
}

include_once '../dbconnect.php';


?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>View Info</title>
  <link rel="stylesheet" type="text/css" href="../styleindex.css">
 </head>
 <body>

 	<p>
 	<div class="form-group">
    <label for="view_appraisee"> View Appraisee's Input:</label>
      <select name="view_appraisee" id="view_appraisee"/>
        <option>Select Any</option>
        <option name="view_by_lecturer_id" id="view_by_lecturer_id">View by Lecturer Id</option>
        <option name="view_by_academic_year" id="view_by_academic_year">View by Academic Year</option>
        <option name="view_by_category" id="view_by_category">View by Category</option>
      </select>
      <input type="submit" name="search" id="search" value="Search"/>
  </div></p>

  <p>
  <div class="form-group">
    <label for="view_self"> View Self Input:</label>
      <select name="view_self" id="view_self"/>
        <option>Select Any</option>
        <option name="view_by_academic_year" id="view_by_academic_year">View by Academic Year</option>
        <option name="view_by_category" id="view_by_category">View by Category</option>
      </select>
      <input type="submit" name="search" id="search" value="Search"/>
  </div></p>

 	<input type="text" id="view" name="view" placeholder="Search with lecturer id">
    <input type="submit" id="view" name="view" value="view">

</body>
  </html>