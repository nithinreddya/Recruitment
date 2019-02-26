<?php
include 'header.php';
include 'j_navbar.php';
if(isset($_SESSION['user_id'])){
	$f_id = $_SESSION['user_id'];
?>
<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Job Description
				</h3>
			</div>


							<section class="bgwhite p-t-66 p-b-60">
								<div class="container">
									<form action="" method="post" class="leave-comment">

										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" placeholder="Domain">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" placeholder="Job Title">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" placeholder="Annual Pay">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" placeholder="Location">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="date" name="password" placeholder="Event Date">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" placeholder="Job details">
										</div>
										<div class="bo4 of-hidden size15 m-b-20">
											<input class="sizefull s-text7 p-l-22 p-r-22" type="date	" name="password" placeholder="Selection Criteria ">
										</div>
										<div class="w-size25">
											<input type = "submit" value = "Publish" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
										</div>
									</form>
						</div>


	</section>

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
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
$('.block2-btn-addcart').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to cart !", "success");
	});
});

$('.block2-btn-addwishlist').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to wishlist !", "success");
	});
});
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>

<?php
}
else {
	header('Location:login.php');
}
 ?>
