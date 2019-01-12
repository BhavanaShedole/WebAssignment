<!DOCTYPE html>
<html>
 <head>
	<title>Welcome</title>
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
         <span id="WelcomStyle">Wanderlust</span>
	     <span id="WelcomStyle1"> Welcome,  
		  
	// <?php
		// session_start();
		// /*echo $_SESSION['email'];*/
		// if(!isset($_SESSION['email']) && empty($_SESSION['email']))
		// {
			// header("Location: index.php");
		// } 
		// else
		// {
		// echo $_SESSION['email'];
		// }
		
		// ?>	

    </span>
		<div class="navbar">
		 <ul class="differentlinks">
			<li><a class ="active" href="Home.php">Home</a></li>
			<li><a href="About.php">About</a></li>
			<li><a href="InterestingFacts.php">Interesting Facts</a></li>
			<li><a href="RealLifeExperience.php">Real Life Experience</a></li>
		 	<li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="Logout.php"> Logout </a></li>
		 </ul>
	     </div>
		 </div>
     <div style="width:100%">

          <div class="parent">
				<!--image taken from google images-->
              <img class="main" src="images/nigara.jpg" id="column1_image" />
			  <!--taken from lorem ipsum*/-->
              <p class="main" id="column1_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dignissim eros ut magna pretium, ut vehicula sem varius. Ut ut efficitur erat, ac faucibus quam. Vivamus fringilla, libero a viverra tristique, justo diam tincidunt libero, eget suscipit mauris risus in orci. Nunc luctus nec lectus eu semper. Etiam ac urna ut arcu ornare pulvinar. Aenean id euismod felis. Maecenas malesuada nibh id pulvinar ultricies. Pellentesque in varius elit, blandit accumsan nisi..</p><!--ends here-->

          </div>


          <div class="parent">
		       <!--image taken from google images-->
              <img class="main" src="images/images.jpg" id="column2_image"/>
			   <!--taken from lorem ipsum*/-->
              <p class="main" id="column2_text">Curabitur ac vestibulum velit, vel fringilla orci. Praesent lobortis dapibus ex eu posuere. Pellentesque sit amet ultricies sem, et molestie dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas mauris ut maximus venenatis. Suspendisse ultrices quam ligula, nec rutrum ex fringilla sit amet. Curabitur dolor risus, egestas non turpis malesuada, pretium efficitur enim. Proin id justo id elit sollicitudin tempus quis in mi. Nulla maximus ultricies dolor, eget porttitor elit condimentum id..</p><!--ends here-->
          </div>

          <div class="parent">
				<!--image taken from google images-->
              <img class="main" src="images/images_3.jpg" id="column3_image" />
			  <!--taken from lorem ipsum*/-->
              <p class="main" id ="column3_text">Proin ac elit non risus congue ullamcorper et id nisi. Cras sed sem dui. Ut tempor facilisis elit, vel aliquet odio fringilla vel. Phasellus consectetur justo sit amet aliquam finibus. Suspendisse ligula odio, posuere et massa eu, vestibulum semper mi. Donec tincidunt venenatis tempor. Nulla a cursus orci. Pellentesque molestie, risus vitae iaculis dignissim, odio felis convallis eros, eu facilisis libero nulla sed dolor. Curabitur ac vestibulum velit, vel fringilla orci. </p><!--ends here-->
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