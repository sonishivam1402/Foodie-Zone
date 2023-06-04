<?php
 
 if($_SERVER['REQUEST_METHOD'] == "POST")
{
         $full_name = $_POST['full_name'];
         $contact = $_POST['contact'];
         $email_id = $_POST['email_id'];
         $password = $_POST['password'];
         $feedback = $_POST['feedback'];

  if(!empty($full_name) && !empty($contact) && !empty($email_id) && !empty($password) && !empty($feedback) )
  {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "foodie_zone";

    $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
      {
         die("Failed to Connect!");
      } 

     $id = random_num(20);
     $query = "insert into contact_us (id,name,contact_no,email_id,password,feedback) values ('$id','$full_name','$contact','$email_id','$password','$feedback')";
                  
     mysqli_query($con ,$query);

    header("Location: thanks.php");
    die; 

  }else{
    echo "All fields are required";
  }
}

function random_num($length)
{

  $text = "";
  if($length < 5)
  {
    $length = 5;
  }

  $len = rand(4, $length);

  for ($i=0; $i < $len; $i++)
  {
    #code....

    $text .= rand(0,9);
  }

  return $text;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Foodie-Zone | Thank You</title>

<style>

body{  
  font-family: Calibri, Helvetica, sans-serif;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../images/as.jpg);
  height: 99vh; background-size: cover;
  background-position: center;     
}

.title{
	position: absolute;
	top: 45%;
	left: 35%;
	transform: translate(-50%,-50%);
	font-size: 30px;
}

a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid #fff transparent;
}

a:hover{
	background-color: #fff;
	color: #000;
}
</style>  
</head>
<body>
	<div class="title">
	 <h1 style="color: whitesmoke; font-family: script; "> "  Thanks for Your Feedback..  "</h1>
    </div>
  <a href="../Start.html">HOME</a>
</title>
</body>
</html>