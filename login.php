<?php

	$conn = mysqli_connect('localhost','root','','db_task');
	
	// if($conn){
		// echo 'yes connect';
	// }
	// else {
		// echo 'not connect';
	// }
	if(isset($_POST['submit1']))
	{
		$a = $_POST['name1'];
		$b = $_POST['email1'];
		$c = $_POST['contact'];
		
		
		$q="INSERT INTO tb_login(name,email,contact)VALUES('$a','$b','$c')";
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


<div class="container-fluid one">
	<div class="row">
	<div class="col-md-1 wave">
	<img src="wave.png"></div>
	<div class="col-md-1">
		<img src="bg.jpg.svg">

	</div>
	<div class="col-md-4"></div>
		<div class="col-md-6">
			<form method="post" class="form_field">
		<div class="log">
			<h1>login to your account</h1>
		</div>
		<div class="input_field">
			<input type="text" name="name1" placeholder="Enter Your Name" required size="40px" maxlength="32" pattern="[A-Za-z]{1,32}" autocomplete="off">
		</div>
		<div class="input_field">
			<input type="email" name="email1" placeholder="E-mail" size="40px" required pattern="[^ @]*@[^ @]*">
		</div>
		<div class="input_field">
			<input type="text" name="contact" placeholder="Contact Number" size="40px" pattern="[789][0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9">
		</div>
		
<div >
	<input type="submit" name="submit1" value="LOG IN" class="btn">
	<!--<button type="button" class="btn">LOGIN</button>-->
</div>

</div>
	
	</div>
		</div>
		
		


</form>	
</body>
</html>