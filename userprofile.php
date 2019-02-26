<?php
include 'header.php';
include 'user_navbar.php';
if(isset($_SESSION['user_id'])){
?>

<body>

  <div class="banner bgwhite p-t-40 p-b-40">
  	<div style="position:absolute;left:600px;">
  	<img src = "profile.png">
  	</div>
  </div>
</body>
</html>
<?php
}
else {
	header('Location:index.php');
}
 ?>
