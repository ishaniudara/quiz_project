<?php
	$hostname="localhost";
$username="root";
$password="";
$dbname="register";
$conn=  mysqli_connect($hostname,$username,$password,$dbname);
?>
<?php
session_start();

    if(isset($_POST['login'])) {
    		$uname=mysqli_real_escape_string($conn,$_POST['name']);
		$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
       

$query="SELECT * FROM users WHERE firstname='".$uname."' AND password='".$pwd."'";
$result=mysqli_query($conn,$query);

if ($result->num_rows>0) {
    while($row=$result->fetch_assoc()){
        $_SESSION['uname'] = $row['firstname'];
        $_SESSION['email'] = $row['email'];
          
    }
}

$validity = mysqli_num_rows($result);
//printf("Result set has %d rows.\n", $validity);


if($validity==1){

    header("Location: shu.php");
    exit();
}
else{
    
    header("Location: loginform.php");

}


    }
   


?>






<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	
<style>
	body{
		margin: 0;
		padding: 0;
		background-size: cover;
		background-position: center;
		font-family: sans-serif;
		background-image:url(images/img.jpeg);
	}
	.loginbox{
		width: 320px;
		height: 420px;
		background:#000;
		color:#fff;
		top:50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
	}
	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 22px;

	}
	.loginbox p{
		margin: 0;
		padding: 0;
		font-weight: bold;

	}
	.loginbox input{
		margin-bottom: 20px;
		width: 100%;
	}
	.loginbox input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px; 
	}
	.loginbox input[type="submit"]{
		border:none;
		outline: none;
		height: 40px;
		background:#fb2525;
		color:#fff;
		font-size: 18px;
		border-radius: 20px;
		align-items: center;
	
	}
	.loginbox input[type="submit"]:hover{
		color:#000;
		background:#ffc107;
		cursor: pointer;
	}
	.loginbox a{
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color:darygray;

	}
	.loginbox a:hover{
		color:#ffc107;

	}

</style>
</head>
<body>
	<div class="loginbox">
		<h1>LOGIN</h1>
		<form action="loginform.php" method="post">
			<p>Username</p>
			<input type="text" placeholder="Enter Username" name="name">
			<p>Password</p>
			<input type="Password" placeholder="Enter Password" name="pwd">
			<input type="submit" name="login" value="Login"/><br>
			Don't have an account ?
                    <a href="register.php" style="color: crimson"; class="button">Register</a><br><br>
                    <a href="index.html" style="color: crimson"; class="button">Back to Home</a>

		</form>
	</div>
<h3></h3>
</body>
</html>