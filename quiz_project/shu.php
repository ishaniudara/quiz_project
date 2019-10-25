<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="register";
$conn=  mysqli_connect($hostname,$username,$password,$dbname);
session_start();

?>
<html>
<head>
	<title></title>
	<style>
	.container{
		width: 500px;
		background-color: gray;
		margin-left: 250px;
		margin-right: 250px;
		border: 2px solid gray;
			}

  body{

    background-image:url(images/bg.jpg);
    font-family: 'Arial', sans-serif;

  }
	 input[type="submit"]{
		border:none;
		outline: none;
		height: 40px;
		background:#fb2525;
		color:#fff;
		font-size: 18px;
		border-radius: 20px;
		margin-bottom: 20px;
		padding-left: 30px;
		padding-right: 30px;
		width: 50%;



	}
	a{
		text-decoration: none;
		border-radius: 20px;
		border: 1px solid black;
		background-color: black;
		color:#fff;
		padding: 10px;
		width: 50%

	}
	h3{
		color: lightblue;
		font-size: 50px;
		text-align: center;
	}
	
	</style>
	
</head>
<body>
		<h3>Online Quiz</h3>
<div class="container">
	<form action="result.php" method="post">

<?php


	$q="select *from question ORDER BY rand() limit 5";
	$query=mysqli_query($conn, $q);
	while($rows=mysqli_fetch_array($query)){
		

		?>
		<div class="card"><h4><?php echo $rows['question'] ?></h4>
			<?php 
			$q="select * from answer where ans_id={$rows['qid']} order by rand()";
			$query2=mysqli_query($conn, $q);
			while($rows=mysqli_fetch_array($query2)){

				?>
				<div class="card-body"><input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]"  value="<?php echo $rows['aid']; ?>">
					<?php echo $rows['answer']; ?>

			
		</div>


	<?php


}}

?>
<input type="submit" name="submit" value="Submit">
<a href="index.html">LOGOUT</a>

</form>

</div>
</div>
</body>
</html>