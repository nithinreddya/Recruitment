<?php
include 'header.php';
include 'j_navbar.php';?>
<body class="animsition">

	<!-- Content page -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<div class="row">


					<!--  -->
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option selected = "true" disabled = "true">Sort by Domain</option>
									<option>Default Sorting</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option selected = "true" disabled = "true">Sort by Role</option>
									<option>Default</option>

								</select>
							</div>

						</div>
					</div>

					<!-- Product -->
					<div class="row">

							<!-- Cart item -->
							<div class="container-table-cart pos-relative">
								<div class="wrap-table-shopping-cart bgwhite">
									<table class="table-shopping-cart">
										<thead>
										<tr class="table-head">
											<th class="column-1">Candidate Name</th>
											<th class="column-1">Domain</th>
											<th class="column-2">Job Title</th>
											<th class="column-2">Date</th>
											<th class="column-3"></th>
										</tr>
									</thead>
										<tbody>
											<?php
											for($i=1;$i<10;$i++)
											{
											?>
												<tr class="table-row">
													<td class="column-1">Shiva</td>
													<td class="column-1">BI</td>
													<td class="column-2">Data Engineer</td>
													<td class="column-2">22 Feb, 2019</td>
														<td class = "column-3">
														<a class="flex-c-m size9 bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-toggle="collapse" data-target="#demo">
															View Applicant
														</a></td>
												</tr>
												<tr>
													<td colspan="4">
														<div id="demo" class="collapse">
															<form action="" method="post" class="leave-comment">
															<img src="viewcandidate.png">
														</form>
														</div>
													</td>
												</tr>
											<?php } ?>
											</tbody>
									</table>
								</div>
							</div>
						</form>
						</div>

			</div>
		</div>
	</section>





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
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
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
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
