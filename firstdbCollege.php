<html>
	<head>
		<title>Student Details</title>
	</head>
	<body>
		<form action="data.php" method="post">
		<table border="44px" width="500px" align="center">
			<tr>
				<td colspan="2" bgcolor="teal">
				<h1>Student Details</h1>
					
				</td>
			</tr>

			<tr>
				<td>Student Name:</td>
				<td><input type="text" name="name" ></td>
			</tr>

			<tr>
				<td>School Name:</td>
				<td><input type="text" name="school"></td>
			</tr>

			<tr>
				<td>Roll No.</td>
				<td><input type="text" name="rollno"></td>
			</tr>

			<tr>
				<td>Result</td>
				<td><input type="text" name="result"></td>
			</tr>

			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="Submit Now">
				</td>
			</tr>

		</table>
			
		</form>

		<table width="800px" border="5" align="center">
			<tr>
				<td>Serial No</td>
				<td>Student Name</td>
				<td>School Name</td>
				<td>Roll No</td>
				<td>Result</td>
				<td>Delete</td>
				<td>Edit</td>

			</tr>
			<?php 

			mysql_connect("localhost","root","");
			mysql_select_db("college");

			$query1="select * from students";
			$run=mysql_query($query1);
			while ($row=mysql_fetch_array($run)) {
				# code...
				$id=$row['id'];
				$s_name=$row['student_name'];
				$school_name=$row['school_name'];
				$roll_no=$row['roll_no'];
				$s_result=$row['result'];
			
			 ?>
			 <tr>
			 	<td><?php echo $id; ?> </td>
			 	<td><?php echo $s_name; ?></td>
			 	<td><?php echo $school_name; ?></td>
			 	<td><?php echo $roll_no; ?></td>
			 	<td><?php $s_result; ?></td>
			 	<td><a href="delete.php?del=<?php echo $id;?>" >Delete </a> </td>
			 	<td><a href="edit.php?edit=<?php echo $id;?>" >Edit</a></td>

			 	</tr>

			 	<?php } ?>
			 	</table>

	</body>
</html>