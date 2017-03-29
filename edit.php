<?php 
mysql_connect("localhost","root","");
mysql_select_db("college");

$edit_record=$_GET['edit'];
$query="select * from students where id='$edit_record'";
$run=mysql_query($query);
while($row=mysql_fetch_array($run))
{
	$s_name=$row['student_name'];
	$school_name=$row['school_name'];
	$roll_no=$row['roll_no'];
	$result=$row['result'];
}

 ?>

<html>
	<head>
		<title>Student Details</title>
	</head>
	<body>
		<form action="data.php" method="post">
		<table border="44px" width="500px" align="center">
			<tr>
				<td colspan="2" bgcolor="teal">
				<h1>Update Student Details</h1>
					
				</td>
			</tr>

			<tr>
				<td>Student Name:</td>
				<td><input type="text" name="name" value="<?php echo $s_name ?>" ></td>
			</tr>

			<tr>
				<td>School Name:</td>
				<td><input type="text" name="school" value="<?php echo $school_name ?>"></td>
			</tr>

			<tr>
				<td>Roll No.</td>
				<td><input type="text" name="rollno" value="<?php echo $roll_no ?>"></td>
			</tr>

			<tr>
				<td>Result</td>
				<td><input type="text" name="result" value="<?php echo $result ?>"></td>
			</tr>

			<tr>
				<td colspan="2"> <input type="submit" name="update" value="Update Now">
				</td>
			</tr>

		</table>
			
		</form>
		</body>
		</html>