<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Umesh Mundhe</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Land</title>
      <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">

	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/11.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
<?php
						if(isset($_POST["submit"]))
						{
$sq="insert into customer(cust_name,cust_dob,mob_no,Gender,cust_address,land_taken,plot_no,plot_price,amt_paid,mod_of_payment,cheque_no,receipt_date)values('{$_POST["cname"]}','{$_POST["dob"]}','{$_POST["mobile_number"]}','{$_POST["gender"]}','{$_POST["address"]}','{$_POST["landtaken"]}','{$_POST["plot_no"]}','{$_POST["plot_no"]}','{$_POST["amt_paid"]}','{$_POST["paymentmode"]}','{$_POST["chequeno"]}','{$_POST["rec_date"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}

						}

					?>
