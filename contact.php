<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System - Tutor Joe's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="800">

		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

					Umesh Mundhe<BR>
					Alandi Devachi<BR>
					Mail - umeshmundhe@gmail.com<br>Phone - 9762031002
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; Umesh Mundhe's </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});

			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>



	</body>
</html>
