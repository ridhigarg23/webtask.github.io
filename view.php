<?php

	$conn = mysqli_connect('localhost','root','','db_task');
	
	
	if(isset($_POST['submit1']))
	{
		$loc="image/";
		$s=$_FILES['file']['name'];
		$s2 = $loc.basename($s);
		move_uploaded_file($_FILES['file']['tmp_name'],$s2);
		
		$q="INSERT INTO tb_login(file)VALUES('$s')";
		$q1=mysqli_query($conn,$q);
		
			if($q1)
			{
				echo"<script>alert('REGISTER SUCESSFULLY');</script>";
			}
			else{
				echo"<script>alert('NOT REGISTERED');</script>";
			}
	}
	
	
	
?>	
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<form method="post">
				<input type="file" name="file1">
				<input type="submit" name="submit1">
				</form>
			</div>
		</div>
	</div>
</body>
</html>