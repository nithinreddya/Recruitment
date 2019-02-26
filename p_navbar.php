<?php
require 'session.php';
if(isset($_SESSION['user_id'])){
?>
<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">


			<div class="wrap_header">
				<!-- Logo -->
				<a href="pm.php" class="logo">
					<img src="images/icons/logo1.png" alt="IMG-LOGO"  width = "250" height = "500">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="pm.php">HOME</a>
							</li>

							<li>
								<a href="p_status.php">TRACK REQUEST STATUS</a>
							</li>

							<li>
								<a href="mpr.php">RAISE MPR</a>
							</li>

						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="dropdown">

				    <button class="btn  dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"><?php echo "Hello, Agni Jonnalagadda";?><img src="images/icons/icon-header-01.png"  alt="ICON">
				    </button>
				    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				      <li role="presentation" style="padding:10px;"><a role="menuitem" tabindex="-1" href="profile.php">Profile</a></li>
				      <li role="presentation" style="padding:10px;"><a role="menuitem" tabindex="-1" href="logout.php">Sign-out</a></li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>
		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="farmer.php" class="logo-mobile">
				<img src="images/icons/logo1.png" alt="IMG-LOGO" width = "150" height = "180">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="dropdown">
					  <button class="btn  dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"><img src="images/icons/icon-header-01.png"  alt="ICON">
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
							<li role="presentation" style="padding:10px;"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
				      <li role="presentation" style="padding:10px;"><a role="menuitem" tabindex="-1" href="logout.php">Sign-out</a></li>
				    </ul>
				  </div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="">HOME</a>
					</li>

					<li class="item-menu-mobile">
						<a href="">RAISE MPR</a>
					</li>


				</ul>
			</nav>
		</div>
	</header>
<?php } ?>
