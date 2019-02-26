<?php
include 'header.php';
include 'm_navbar.php';
if(isset($_SESSION['user_id'])){
?>
<div class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="sec-title p-b-22">
			<h3 class="m-text5 t-center">
				Reports
			</h3>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Report Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					 for($i=1;$i<4;$i++)
					 {
					?>
					<tr>
						<td><?php echo $i*4;?> Feb, 2019</td>
						<td>xyz</td>
						<td>
							<a class="btn btn-sm btn-success" data-toggle="collapse" data-target="#demo<?php echo $i;?>"><span class="	glyphicon glyphicon-eye-open"></span> View</a>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<div id="demo<?php echo $i;?>" class="collapse">
								<form action="" method="post" class="leave-comment">

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
										<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" value="Status:" disabled>
									</div>
									<img src="round2.png" width="300" height="100">
									<br>
								<img src="chart.png">
								<a class="btn btn-sm btn-success" href=""><span class="	glyphicon glyphicon-eye-open"></span> View All Shortlisted Candidates</a>

							</form>
							</div>
						</td>
				 </tr>
				 <?php
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
	header('Location:index.php');
}
 ?>
