<?php
include 'header.php';
include 'user_navbar.php';
if(isset($_SESSION['user_id'])){
?>
<body>

<div class="container">
  <h2></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Domain</th>
        <th>Job Title</th>
        <th>No. of Applicants</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      for($i=1  ;$i<10;$i++)
      {
        ?>
        <tr>
          <td>2nd Dec 2016</td>
          <td>Web Development</td>
          <td>Full Stack</td>
          <td><?php echo $i*21;?></td>
          <td><a href = "" >Track Application</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
<?php
}
else {
	header('Location:index.php');
}
 ?>
