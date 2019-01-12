<?php
	include("includes/connection.php");
		
	    	$firstname_error="";
			$lastname_error="";
			$emailid_error="";
			$pwd_error="";
			$crfmpwd_error="";
			$address_error="";
			$zipcode_error="";
			$error="";
			$flag=true; 	
			if(isset($_POST["regbtn"]))
			{		
				
				if($first_name = input($_POST["fname"])){
					if(!preg_match("/^[a-zA-Z ]*$/",$first_name)){
						$firstname_error="Only letters allowed";
						$flag=false;
						
				}
				}
				
				if(empty($_POST["lname"])){
					$lastname_error="Please enter last name";
				} else { $last_name = input($_POST["lname"]);
					if(!preg_match("/^[a-zA-Z -]*$/",$last_name)){
						$lastname_error="Only letters allowed";
						$flag=false;
				}
				}
				
				if (empty($_POST["email"])) {
					$emailid_error = "Email is required";
				} else { $emailid = input($_POST["email"]);
					if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
					$emailid_error = "Invalid email format";
					$flag=false;
					}
				}
							
				if (empty($_POST["password"])) {
					$pwd_error = "Password is required";
				} else { 
					$password = input($_POST["password"]);
					/*$pass = md5($password);*/
					if( preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password) === 0) {
					$pwd_error = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
					$flag=false;
					}
				}
				
				if (empty($_POST["crfmpassword"])) {
					$crfmpwd_error = "Confirm Password is required";
					$flag=false;
					}
				else  { $crfmpassword = input($_POST["crfmpassword"]);
					if($password!=$crfmpassword)
					{
					$crfmpwd_error = "Passwords do not match";
					$flag=false;
					}
				}	
				
				if(empty($_POST["address"])){
					$address_error="Please enter address";
					$flag=false;
				} else { $address = input($_POST["address"]);
					if(!preg_match("/^[a-zA-Z0-9 #]+$/",$address)){
						$flag=false;
						$address_error="Address must contain only letters and numbers";
				}
				}
				
				if(empty($_POST["postalcode"])){
					$zipcode_error="Please enter correct postal code";
					$flag=false;
				} else { $zipcode = input($_POST["postalcode"]);
					if(!preg_match("/^[A-Z0-9 ]{6,7}+$/",$zipcode)){
						$flag=false;
						$zipcode_error="Postal code contain only numbers and alphabets";
				}
				}
							
			  if($flag){
				  
				 /* referred from the tutorial slides*/ 
                $emailcheck = $dbconn->prepare("SELECT email FROM bhavana.a1_users WHERE email = :email");
				$emailcheck->bindParam(':email', $emailid);
				$emailcheck->execute();
				/* reference ends*/
				if($emailcheck->rowCount() > 0){
					echo '<script type="text/javascript"> alert("User already exists") </script>';
				} else {
					
					 /* referred from the tutorial slides*/ 
				$salt = '378570bdf03b25c8efa9bfdcfb64f99e';
				$hash = hash_hmac('md5',$password, $salt);
				
				$salt = '378570bdf03b25c8efa9bfdcfb64f99e';
				$hashpwd = hash_hmac('md5',$crfmpassword, $salt);
				
				$stmt = $dbconn->prepare("INSERT INTO bhavana.a1_users (fname, lname, email, password, crfmpassword, address, postalcode) VALUES (:firstname, :lastname, :email, :password, :crfmpassword, :address, :postalcode)");
				$stmt->bindParam(':firstname', $first_name);
				$stmt->bindParam(':lastname', $last_name);
				$stmt->bindParam(':email', $emailid);
				$stmt->bindParam(':password', $hash);
				$stmt->bindParam(':crfmpassword', $hashpwd);
				$stmt->bindParam(':address', $address);
				$stmt->bindParam(':postalcode', $zipcode);
				$stmt->execute();
				/* reference ends*/				
				echo '<script type="text/javascript"> alert("Registered successfully") </script>';
					
				}
				}
				
			
			}	
	/* referred stackoverflow*/
	function input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data =  htmlspecialchars($data);
	return $data;
	}
/* reference ends*/	

?>
<!DOCTYPE html>
<html>
  <head>
		
	    <title>Registration Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/register.css"/>
   
  </head>
  <body>
	   <div class="Registration_form">
	 
	   
	   <h1>Sign Up</h1>
	   
	    <form method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
		
		<div class="f_name">
		<!--<label class="labels">First Name:</label>-->
		<input type="text" class="input" name="fname" id="firstname" placeholder="First Name" required/><br>
		<span class="err"><?php echo $firstname_error;?></span>
		</div>
		
		<div class="l_name">
		<!-- <br><label class="labels">Last Name:</label> -->
		<input class="input" name="lname" id="lastname" type="text" placeholder="Last Name" required/>
		<span class="err"><?php echo $lastname_error;?></span>
		</div>
		
		<div class="emaiID">
		<!--<br><label>Email ID:</label>-->
		<input class="input" name="email" id="email" type="text" value="" placeholder="Email ID" required/>
		<span class="err"><?php echo $emailid_error;?></span>
		</div>
		
		
		<div class="pw">
		<!--<br><label>Password:</label>-->
		<input class="input" name="password" id="pwd" type="password" value="" placeholder="Password" required/>
		<span class="err"><?php echo $pwd_error;?></span>
		</div>
		
		<div class="cpw">
		<!--<br><label>Confirm Password:</label>-->
		<input class="input" name="crfmpassword" id="crfmpwd" type="password" value="" placeholder="Confirm Password" required/>
		<span class="err"><?php echo $crfmpwd_error;?></span>
		</div>
		
		<div class="address">
		<!--<br><label>Address:</label>-->
		<input class="input" name="address" id="addr" type="text" value="" placeholder="Address" required/>
		<span class="err"><?php echo $address_error;?></span>
		</div>
		
		<div class="postal_code">
		<!--<br><label>Postal Code:</label>-->
		<input class="input" name="postalcode" id="code" type="text" value="" placeholder="Postal Code" required/>
		<span class="err"><?php echo $zipcode_error;?></span>
		</div>
		
		
		
		<br>
		<div id="container">
		<input type="submit" name="regbtn" id="button" value="Sign Up";">
		<a href="login.php"> <input type="button" name="return" id="backbtn" value="Back to Login"> </a>
		</div>
		</form>
		</div>
	</body>
</html>
