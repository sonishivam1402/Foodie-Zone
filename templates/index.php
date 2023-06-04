<?php
session_start();
include("connections.php");
include("function.php");

$user_data=check_login($con);
?>

<!DOCTYPE html>  
<html>
 <head>
  <title>Foodie-Zone | Welcome's You</title>
  <style>
    body{
      background-color: black;
    }

ul{
  float: right;
  list-style-type: none;
  margin-top: 25px;

}

ul li{
  display: inline-block;
}

ul li a{
  text-decoration: none;
  color: #fff;
  padding: 5px 20px;
  border: 1px solid #fff transparent;
}

ul li a:hover{
  background-color: #fff;
  color: #000;
}

ul li.active a{
  background-color: #fff;
  color: #000;
}

.logo img{
  float: left;
  width: 200px;
  height: ;

}

.main{
  margin:  0;
  padding: 0;
  font-family: Century Gothic;
}

.title{
  position: absolute;
  top: 40%;
  left: 13%;
  transform: translate(-50%,-50%);
}

.title h2{
  color: #fff;
  font-size: 50px;
  font-family: gabriola;
}

.title h4{
  color: #fff;
  font-size: 30px;
  font-family: gabriola;
}

.button{
  position: absolute;
  top: 50%;
  left: 13%;
  transform: translate(-50%,-50%);
}

.btn{
  border: 1px solid #fff;
  padding: 10px 30px;
  color: #fff;
  text-decoration: none;
}

.btn:hover{
  background-color: #fff;
  color: #000;
}




    h1{
      font-size: 50px;
      line-height: 1.4;
      text-align: center;
      color: white;
      margin-top: 50px;
      font-family: gabriola;
    }

    .maindiv{
      width: 60%;
      height: 500px;
      position: absolute;
      left: 68%;
      top: 55%;
      transform: translate(-50%, -50%);
      background-image: url(../images/a.jpg);
      background-size: 100% 100%;
      box-shadow: 1px 2px 10px 5px white;
      animation: slider 20s infinite linear;
    }

    @keyframes slider{
      0%{ background-image: url(../images/a.jpg); }

      25%{ background-image: url(../images/a2.jpg); }

      50%{ background-image: url(../images/a4.jpg); }

      75%{ background-image: url(../images/a5.jpg); }

      95%{ background-image: url(../images/index.jpg); }

    }



 h2{
  position: absolute;
  top: 35%;
  left: 19%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-size: 50px;
  font-family: gabriola;
}

 h3{
  position: absolute;
  top: 60%;
  left: 17%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-size: 25px;
  font-family: gabriola;
}

 h4{
  position: absolute;
  top: 20%;
  left: 8%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-size: 30px;
  font-family: gabriola;
}

.button{
  position: absolute;
  top: 85%;
  left: 18%;
  transform: translate(-50%,-50%);
}

.btn{
  border: 5px solid red;
  padding: 10px 30px;
  color: #fff;
  text-decoration: none;
}

.btn:hover{
  background-color: #fff;
  color: #000;
}
  
  </style>
 </head>
<body>

 <header>
  
    <div class="main">
      <div class="logo">
        <img src="../images/logo.png">
      </div>
      <ul>
        <li class="active"><a href="index.php" >Home</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </header>





  <div class="maindiv"></div>

>
      <h4 style="colour: white;"> Hello, &nbsp  <?php echo $user_data['user_name']; ?> </h4><br>
      <h2>Welcome To FOODIZONE ..!!!</h2>
      <h3>#One Click, one order & you get the food delivered.<br>
          #Good food is what we deliver.<br>
          #Your hunger companion.<br>
        </h3>
   
<div class="button">
      <a href="../images/cart.php" class="btn"> Order Now </a>
    </div>
</body>
</html>
