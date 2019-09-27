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
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/11.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">

						<h3 > Add Plot Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into plot(plot_id,plot_name,plot_address,plot_size) values('{$_POST["p_id"]}','{$_POST["p_name"]}','{$_POST["p_add"]}','{$_POST["p_size"]}')";
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

				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Plot Name</label><br>

				Plot id				<input type="number" name="p_id" ><br>
				Plot name			<input type="text" name="p_name"><br>
				Plot address	<input type="text" name="p_add" ><br>
				plot size			<input type="number" name="p_size">
			<!--  <select name="cname"  required class="input2">
						<option value="">Select</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="IX">IX</option>
						<option value="X">X</option>

					</select><br><br>
					<label>Section </label><br>
					<select name="sec"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option> -->

					</select>
					<br>
					<button type="submit" class="btn" name="submit">Add Plot Details</button>
				</form>


				</div>


				<div class="tbox">
					<h3 style="margin-top:30px;"> Plot Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";
						}

					?>
					<table border="1px" >
						<tr>
							<th>plot_id</th>
							<th>plot_name</th>
							<th>plot_address</th>
							<th>plot_size</th>
						</tr>
						<?php
							$s="select * from plot";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>

											<td>{$r["plot_id"]}</td>
											<td>{$r["plot_name"]}</td>
											<td>{$r["plot_address"]}</td>
											<td>{$r["plot_size"]}</td>
											<td><a href='delete.php?plot_id={$r["plot_id"]}' class='btnr'>Delete</a></td>
										</tr>
										";

								}

							}
						?>

					</table>
				</div>
			</div>

				<?php include"footer.php";?>
	</body>
</html>
