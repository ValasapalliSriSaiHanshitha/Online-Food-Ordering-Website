<section class="fnavbar">
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">The Kitchen</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/TheKitchen" class="hvr-grow">Home</a></li>
		        <li><a href="/TheKitchen/about-the-kitchen.php" class="hvr-grow">About Us</a></li>
		        <li><a href="food-categories.php" class="hvr-grow">Categories</a></li>
		        <li><a href="foods.php" class="hvr-grow">Foods</a></li>
		        <li><a href="#" class="hvr-grow" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +91 9876543210. Check the bottom Footer Section of the website for more info.');">Contact</a></li>
		        
		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php" class="hvr-grow">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="/TheKitchen">Home</a></li>
	        <li><a href="/TheKitchen/about-the-kitchen.php">About Us</a></li>
	        <li><a href="food-categories.php">Categories</a></li>
	        <li><a href="foods.php">Foods</a></li>
	        <li><a href="#" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +81-225-314-3456. Check the bottom Footer Section of the website for more info.');">Contact</a></li>

	        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		  </ul>
	</section>