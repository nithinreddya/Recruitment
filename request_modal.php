<?php
include 'header.php';
require 'session.php';
$user = $_SESSION['user_id'];
if($user=="1")
{
  $user="p_status.php";
}
else if($user=="2")
{
  $user="m_status.php";
}
else if($user=="3")
{
  $user="man_status.php";
}
else if($user=="4")
{
  $user="j_status.php";
}
?>
<body>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">View Request</h4>
          </div>
          <div class="modal-body">
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
  						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="password" value="No. of Employess required: 45" disabled>
  					</div>

          </div>
          <div class="modal-footer">
            <button type="submit"  name = "close" class="btn btn-default" ><a  href ="<?php echo $user;?>"> Close</a></button>
          </div>
          </form>
        </div>

      </div>
    </div>
</div>
</body>
<script type="text/javascript">
	$(window).on('load',function(){
		$('#myModal').modal('show');
	});
</script>
</html>
