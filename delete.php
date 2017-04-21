<?php 

mysql_connect("localhost","root","");
mysql_select_db("college");


$delete_id=$_GET['del'];
$query="delete from students where id='$delete_id'";
if (mysql_query($query)) {
	# code...
	echo "<script>window.open('firstdbCollege.php?deleted=data has been deleted........ ','_self')</script>";
}


 ?>