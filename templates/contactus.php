<?php



?>

<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="contactus.js"> </script>
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../images/as.jpg);
  height: 99vh; background-size: cover;
  background-position: center;  
    
}  
.container { 
    padding: 50px;  
    background-color: lightgray;
    width: 500px;
    margin-left: 50px;
}  
  
input[type=text], input[type=password], 
textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background-color: #fff;
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: lightblue;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  

<body> 
<form name="myForm" action="thanks.php" onsubmit="return validateForm()" method="post">  
  <div class="container">  
  <center>  <h1>--: Contact Us :--</h1> </center>  
  <hr>  
  <label> Full Name </label>   
<input type="text" name="full_name" placeholder= "First                   Middle                  Last" size="15" required />      
<div>  
<label>   
Gender :  
</label>
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
</div><br>  
<label>   
Phone :  
</label>  
<input type="number" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="number" name="contact" placeholder="phone no." size="10" /><br><br> 
<label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email_id" required />  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password">  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat"> 
    <label>  Feedback : </label> 
<textarea cols="80" rows="5" placeholder="Any Complaint, Comment or Feedback" name="feedback" value="Feedback" required / >  
</textarea> 
 <button type="submit" class="registerbtn">Submit</button>
    </div>    
</form>  
</body>  
</html>  