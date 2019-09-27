<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Umesh's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<?php include"navbar.php";?><br>


		<img src="img/11.jpg" style="margin-left:90px;" class="sha">

			<div id="section">

				<?php include"sidebar.php";?><br>

				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Land Management</h3><br>
					<img src="img/hh.jpg" class="imgs">
					<p class="para">
						Land Management System is a is a complete Land management software designed to automate a Lands diverse operations from Custoemr, Expense and all other.
					</p>

					<p class="para">
						This Land software has a powerfull online community . It is a paperless office automation solution for today's modern era. .
					</p>
				</div>

			</div>

		<?php include"footer.php";?>
	</body>
</html>
