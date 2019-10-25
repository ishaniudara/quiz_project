

<?php
	$hostname="localhost";
$username="root";
$password="";
$dbname="register";
$conn=  mysqli_connect($hostname,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{

    background-image:url(images/bg.jpg);
    font-family: 'Arial', sans-serif;

  }
  h1{
  	text-align: center;
  	color: white;
  }
  td{
  	color: white;
  	font-size: 30px;
  }
  </style>
</head>
<body>
<h1>Online Quiz</h1>
<br>
<br>
<br>
<table>
	<tr>
		<th colspan="2"><h1 class="test">Results</h1></th>
	</tr>
	<tr><td>Question Attempted</td>
		<?php
		$resultans=0;
		if(isset($_POST['submit'])){
			if(!empty($_POST['quizcheck'])){
				$checked_out=count($_POST['quizcheck']);
			}}
				?>
				<td>
					<?php
					 echo "Out of 5, you have Attempted".$checked_out."option.";?>

				</td>
			</tr>
				
					
	
</table>
</body>
</html>