<?php
include 'header.php';
?>
	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
					<form action="" method="post" class="leave-comment">
            <img src="images/icons/logo1.png" alt="IMG-LOGO" width = "180" height = "60" class=".hov-img-zoom">

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" placeholder="Employee Id">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
						</div>

						<?php
						// require 'connect.php';
						//
						if(isset($_POST['mobile'])&&isset($_POST['password'])){
							$email = $_POST['mobile'];
							$password = $_POST['password'];
							$_SESSION['user_id'] = $email;
							if($email=="1")
							{
								header('Location: pm.php');
							}
							else if($email=="2")
							{
								header('Location: management.php');
							}
							else if($email=="3")
							{
								header('Location: manager.php');
							}
							else if($email=="4")
							{
								header('Location: junior.php');
							}
							else
							{
								echo "<div class='s-text6' style='color:red;'>Incorrect Id or Password</div>";
							}
						}
						// 	$t1 = 0;
						// 	$t2 = 0;
						// 	$result=$db->query("SELECT * FROM users");
						// 	$rows = $result->fetch_all(MYSQLI_ASSOC);
						// 	foreach ($rows as $row) {
						// 		if($mobile==$row['mobile']){
						// 			$t1++;
						// 			if($password==$row['password']){
						// 				$t2++;
						// 				$user_id = $row['id'];
						// 			}
						// 		}
						// 	}
						// 	if($t1==0){
						// 		echo "<div class='s-text6' style='color:red;'>Mobile Number Incorrect</div>";
						// 	}
						// 	else{
						// 		if($t2==0){
						// 			echo "<div class='s-text6' style='color:red;'>Password Incorrect</div>";
						// 		}
						// 		else if($t1>0&&$t2>0){

						//
						// 		}
						// 	}
						// }
						?>
							<a href="">forgot password?</a>
						<br><br>

						<div class="w-size25">
							<!-- Button -->
							<input type = "submit" value = "Sign-in" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">

						</div>
					</form>
		</div>
	</section>


	<!-- Footer -->



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>

	<script>
	var x = document.getElementById("demo");

	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(showPosition);
	    } else {
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}

	function showPosition(position) {
	    var latlon = position.coords.latitude + "," + position.coords.longitude;


	    window.location.href = "register.php?name=" + latlon;
	}
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
