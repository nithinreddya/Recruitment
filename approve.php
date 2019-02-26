<?php
include 'header.php';
include 'm_navbar.php';
if(isset($_SESSION['user_id'])){
?>

	<div class="container">
		<form action="m_status.php" method="post" class="leave-comment">

			<div class="bo4 of-hidden size15 m-b-10">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" value="Domain: BI" disabled>
			</div>
			<div class="bo4 of-hidden size15 m-b-10">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="mobile" value="Role: Data Analyst" disabled>
			</div>
			<div class="bo4 of-hidden size15 m-b-10">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" value="Experience: 2-4 years" disabled>
			</div>
			<div class="bo4 of-hidden size15 m-b-10">
				<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" value="Annual Pay: 5 LPA" disabled>
			</div>
		<div class="bo4 of-hidden size15 m-b-10">
			<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" value="No. of Employess required: 45" disabled>
		</div>
		<div class="bo4 of-hidden size15 m-b-10">
			<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="text" placeholder="Add a comment">
		</div>

		<button class="flex-c-m size9 bg1 bo-rad-23 hov1 s-text1 trans-0-4" name = "cancel" type = "submit">
			Approve
		</button>
	</form>
	</div>



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
