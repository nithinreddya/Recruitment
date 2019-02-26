<?php
	include 'header.html';
	include 'css/csssheets.css';
	include 'js/scripts.js';
?>
<style>
#text{
		font-family: "SF Mono","Monaco","Andale Mono","Lucida Console","Bitstream Vera Sans Mono","Courier New",Courier,monospace;
		color: white;
}
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <script>
	if (annyang) {
	  // Let's define our first command. First the text we expect, and then the function it should call
	  var commands = {
		'hello': function() {
		  location.assign("http://localhost/RP");
		}
	  };
	  // Add our commands to annyang
	  annyang.addCommands(commands);
	  // Start listening. You can call this here, or attach this call to an event, button, etc.
	  annyang.start();
	}
</script>
<body id = "body" class ="bg">

	<div class="dropdown" id = "btn">
		<button onclick="myFunction()" class="dropbtn">Login as</button>
		  <div id="myDropdown" class="dropdown-content">
			<a href="login.php" target = "">GGKian</a>
			<a href="userlogin.php" target = "">Other</a>
		  </div>
	</div>
	<script>
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {

			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
			  var openDropdown = dropdowns[i];
			  if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			  }
			}
		  }
		}
	</script>
</body>
</html>
