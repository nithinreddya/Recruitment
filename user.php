<?php
include 'header.php';
include 'user_navbar.php';
if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
?>
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">

		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">Domain</th>
						<th class="column-2">Job Title</th>
						<th class="column-2">Experience</th>
						<th class="column-3">Location</th>
						<th class="column-4">Annual Pay</th>
						<th class="column-5">Last Date</th>
						<th class="column-5"></th>
					</tr>
					<?php
						for($i=0;$i<15;$i++)
						{
						?>
							<form action="viewjob.php" method="post">
							<tr class="table-row">
								<td class="column-1">BI</td>
								<td class="column-2">Data Engineer</td>
								<td class="column-3">2 to 4 years</td>
								<td class="column-4">Hyderabad</td>
								<td class="column-5">5 LPA</td>
								<td class="column-2">02 Mar, 2019</td>
									<td class = "column-1">
									<input type = "hidden" value = "'.$id.'" name = "cart_id">
									<button class="flex-c-m size9 bg1 bo-rad-23 hov1 s-text1 trans-0-4" name = "cancel" type = "submit">
										View Details
									</button></td>
							</tr>
							</form>
							<?php
						}
						?>
				</table>
			</div>
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
	header('Location:index.php');
}
 ?>
