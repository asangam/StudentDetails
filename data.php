<?php 
mysql_connect("localhost","root","");
mysql_select_db("college");

if(isset($_POST['submit']))

{
  $name=$_POST['name'];
  $school=$_POST['school'];
  $roll=$_POST['rollno'];
  $result=$_POST['result'];

  $query="insert into students(student_name,school_name,roll_no,result) values (' $name','$school','$roll','$result')";
   

    // mysql_query($query);
  if(mysql_query($query))
  {
    // echo "Data Inserted";
   echo "<script>alert('Inserted')</script>"; 
   echo "<script>window.open('firstdbCollege.php','_self')</script>";
  }
  else
  {
    echo "Unable to Insert Data";

    // if (strlen($str) == 0) for blank 
    //field validation check if the length if the string is 0
  }

}

 ?>