<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";

	}
	$sql="SELECT * FROM customer";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Umesh Mundhe</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">

						<h3 > View Customer Details</h3><br>
						<div class="ibox">
							<img src="<?php echo $row["IMG"]; ?>" height="230" width="230">

						</div>

						<div class="tsbox">
						<table border="1px">

							<tr><th>Name </th> <td> <?php echo $row["cust_name"]; ?></td></tr>
							<tr><th>DOB</th> <td> <?php echo $row["cust_dob"]; ?></td></tr>
							<tr><th>Phone no</th> <td> <?php echo $row["mob_no"]; ?></td></tr>
							<tr><th>GENDER</th> <td> <?php echo $row["Gender"]; ?></td></tr>
							<tr><th>Adress </th> <td> <?php echo $row["cust_address"]; ?></td></tr>
							<tr><th>Land Own</th> <td> <?php echo $row["land_taken"]; ?></td></tr>
							<tr><th>amt_paid </th> <td> <?php echo $row["amt_paid"]; ?></td></tr>
							<tr><th>payment Mode </th> <td> <?php echo $row["mod_of_payment"]; ?></td></tr>
							<tr><th>Cheque No</th> <td> <?php echo $row["cheque_no"]; ?></td></tr>
							<tr><th>rec_date</th> <td> <?php echo $row["receipt_date"]; ?></td></tr>

						</table>
						</div>
				</div>
			</div>
			<?php include"footer.php";?>

	</body>
</html>
