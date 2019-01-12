<?php 
session_start();	
include("includes/connection.php"); 
		
	
    $err ='';
	
	if (isset($_POST["submit"])) 
	{
   
   	
      $email = input($_POST["email"]);
	
      $password = input($_POST["password"]);
	  $salt = '378570bdf03b25c8efa9bfdcfb64f99e';
	  $hash= hash_hmac('md5',$password,$salt);
	
	
	  
      /*(bind param and prepare) concepts refered from tutorial--just the syntax*/
	  $login= $dbconn->prepare("SELECT email, password FROM bhavana.a1_users WHERE email = :email and password = :password"); 
	  $login->bindParam(":email", $email); 
	  $login->bindParam(":password", $hash); 
	  $login->execute();
	
	  /*reference ends here*/
	  $exists = $login->fetchColumn(); 
	  if ($exists) 
		{
		$_SESSION['email']=$email;
		header("location: welcome.php"); 
		}
		else
		{
		echo '<script type="text/javascript"> alert("invalid username and password") </script>'; 
		}
	  }
	 
	


   function input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}	
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body link="#F87D22">
	<div class="loginform">
	<h1>Login</h1>
	  <div class="inner">
	  <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
		<p>Email ID</p>
		<input type="text" name="email" required/>
		<p>Password</p>
		<input type="password" name="password" required/>
		<input type="submit" name="submit" value="Login"><br>
		<span><?php echo $err; ?></span><br><br>
		<label class="registerNow" id="regNow">Not a user? Sign up Now!!</label><br><br>
		<div class="register">
		<a href="register.php">		
	    <input type="button" name="register" id="reg" value="Sign Up">
		

        </div>		
	   </form>
	
	</div>
</body>	
</html>