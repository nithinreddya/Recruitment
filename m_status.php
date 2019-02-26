<?php
include 'header.php';
include 'm_navbar.php';
include 'pop.php';
if(isset($_SESSION['user_id'])){
?>
<div class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="sec-title p-b-22">
			<h3 class="m-text5 t-center">
				Requests
			</h3>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Request Name</th>
						<th>Status</th>
						<th>Action</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					for($i=1;$i<5;$i++)
					{
						echo '
						<tr>
							<td>'.$i.' Feb, 2019</td>
							<td>AB'.$i.'DQ'.$i.'T</td>
							<td>Pending</td>
							<td>
							<a class="btn btn-sm btn-primary" href="request_modal.php" ><span class="glyphicon glyphicon-eye-open"></span> View</a>
							<a class="btn btn-sm btn-warning" href="edit_modal.php"><span class="glyphicon glyphicon-edit"></span> Edit</a>
							<button class="btn btn-sm btn-danger" onclick="f(this.value)" value = "2"><span class="glyphicon glyphicon-trash" ></span> Close</button>

							</td>
							<td>
							<a class="btn btn-sm btn-success" href="approve.php"> Approve</a>
							<a class="btn btn-sm btn-danger" href="reject.php"> Reject</a>
							</td>
						</tr>';
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
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
