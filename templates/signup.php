<?php

session_start();

   include("connections.php");
   include("function.php");

       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
       	//SOMETHING WAS POSTED
       	$user_name = $_POST['user_name'];
       	$password = $_POST['password'];

       	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       	{

       		//save to database
       		$user_id = random_num(20);
       		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
                  
                  mysqli_query($con ,$query);

                  header("Location: login.php");
                  die;
       	}else
            {
       	echo "Please enter some valid information!";
            }
       }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Foodie-Zone | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
</head>
<body>
	<style type="text/css">
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{
		position: absolute;
		top: 35%;
		left: 50%;
		transform: translate(-50%,-50%);
		padding: 10px;
		width: 100px;
		color: #fff;
		background-color: transparent;
		border: 1px solid #fff;

	}
	#button:hover{
	background-color: #fff;
	color: #000;
}
	#box{
		margin-top: 20px;
		background-color: transparent;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
</style>
<header>
<div id="box">
	<form method="post">
		<div style="font-size: 30px; margin: 10px; text-align: center; color: white;">Sign Up</div>
		<h4 style="color: white;">Username<h4>
			<input id="text" type="text" name="user_name"><br><br>
		<h4 style="color: white;">Password<h4>
			<input id="text" type="password" name="password"><br><br>


			
	<div class="button">		
	<input id="button" type="submit" value="Sign Up"><br><br><br><br>		
      <a href="login.php" class="btn">Click to Login</a>
	</div>
	</form>
</div>

</header>
</body>
</html>

