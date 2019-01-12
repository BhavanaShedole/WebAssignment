<!DOCTYPE html>
<html>
 <head>
	<title>Real Life Experience</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/welcome.css"/>
	
 </head>
<body>

<div class="img">

	<section class="intro">
	
        <!--Burger menu start-->
         <div id="mySidenav" class="sidenav">
      <a href="Home.php">Home</a>
             <a href="About.php">About</a>
             <a href="InterestingFacts.php">Interesting Facts</a>
             <a href="RealLifeExperience.php">Real Life experience</a>
             <a href="ContactUs.php">Contact Us</a>
			 <li><a href="Logout.php"> Logout </a></li>
         </div>
         
         <span onclick="navBarOpen()" id="burgerMenuIcon">&#9776;</span>
         <span id="WelcomStyle">Wonderlust</span>
	 <span id="WelcomStyle1"> Welcome,  
	<?php
		session_start();
		if(!isset($_SESSION['email']) && empty($_SESSION['email']))
		{
			header("Location: index.php");
		} 
		else
		{
		echo $_SESSION['email'];
		}
		?>	
    </span>
		<div class="navbar">
		 <ul class="differentlinks">
			<li><a href="Home.php">Home</a></li>
			<li><a href="About.php">About</a></li>
			<li><a href="InterestingFacts.php">Interesting Facts</a></li>
			<li><a class ="active" href="RealLifeExperience.php">Real Life Experiences</a></li>
		 	<li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="Logout.php"> Logout </a></li>
		 </ul>
	     </div>
		 </div>
     <div style="width:100%">

          <div class="parent">
		      <!--image taken from google images-->
              <img class="main" src="images/Exp.jpg" id="column1_image" />
			 
              <p class="main" id="column1_text">Experieces</p>

          </div>


          <div class="parent">
				<!--image taken from google images-->
              <img class="main" src="images/exp1.jpg" id="column2_image"/>
			  
              <p class="main" id="column2_text">Experieces</p>
          </div>

          <div class="parent">
			  <!--image taken from google images-->
              <img class="main" src="images/exp2.jpg" id="column3_image" />
			
              <p class="main" id ="column3_text">Experieces</p>
              </div>

          </div>
      </div>
	</section>
	 <script>
         function navBarOpen() {
             document.getElementById("mySidenav").style.width = "200px";
         }

         function navBarClose() {
             document.getElementById("mySidenav").style.width = "0";
         }
     </script>
	
</body>
</html>