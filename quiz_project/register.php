
<?php
	$hostname="localhost";
$username="root";
$password="";
$dbname="register";
$conn=  mysqli_connect($hostname,$username,$password,$dbname);
if (isset($_POST['create'])) {
		 
	$firstname=mysqli_real_escape_string($conn,$_POST['Firstname']);
		$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
			$email=mysqli_real_escape_string($conn,$_POST['Email']);
			$password=mysqli_real_escape_string($conn,$_POST['password']);
    $sql="INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
   
	$result = mysqli_query($conn,$sql);

if ($result) {
    header('Location: loginform.php');
}}

?>

<html>
<head>
	<title>register</title>
	<style>
	body{
		margin: 0;
		padding: 0;
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
		background-image:url(images/img.jpeg);}

		.regi{
		width: 400px;
		height: 450px;
		background:#000;
		color:#fff;
		top:50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;	}
		
		
		h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 30px;

	}
	.regi input{
		margin-bottom: 20px;
		width: 100%;
		padding-left: 20px;

	}
	.regi label{
		padding-right: 60px;
	}
		.regi input[type="submit"]{
		border:none;
		outline: none;
		height: 40px;
		background:#fb2525;
		color:#fff;
		font-size: 18px;
		border-radius: 20px;

	}
		.regi input[type="submit"]:hover{
		color:#000;
		background:#ffc107;
		cursor: pointer;
	}
	</style>
</head>
<body>
<form action="register.php" method="POST">
	<div class="regi">
<h1>REGISTER</h1>

<label>First Name</label>
<input type="text" name="Firstname"><br>

<label>Last Name</label>
<input type="text" name="lastname"><br>

<label>Email</label>
<input type="text" name="Email"><br>

<label>Password</label>
<input type="Password" name="password" ><br>
<input type="submit" name="create" value="REGISTER">

</div>
</form>
</body>
</html>