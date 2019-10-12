<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";

	}
	$sql="SELECT * FROM expense WHERE exp_id={$_GET["id"]}";
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
		<style>table, th, td {
  border: 1px solid black;
}</style>
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">

						<h3 > View Expense Details</h3><br>
						<div class="ibox">
						</div>

						<div class="tsbox">
						<table border="5px" align="center">

							<table border='1px' class='table'>
										<tr>
                      <th>exp_id</th>
            					<th>amt</th>
            					<th>mode</th>
            					<th>wirecompund</th>
                  		<th>roadexpense</th>
                      <th>responsible</th>
            					<th>details</th>
            					<th>date</th>
										</tr>
                    <tr>
                    <td>	<?php echo $row["exp_id"]; ?></td>
                      <td><?php echo $row["amt"]; ?></td>
                        <td> <?php echo $row["mode"]; ?></td>
                   <td> <?php echo $row["wirecompund"]; ?></td>
                          <td> <?php echo $row["roadexpense"]; ?></td>
                           <td> <?php echo $row["responsible"]; ?></td>
                       <td> <?php echo $row["details"]; ?></td>
                     </th> <td> <?php echo $row["date"]; ?></td>
                             </tr>
                     ";



					<!--		<tr><td><div contenteditable>I'm editable</div></td><td><div contenteditable>I'm also editable</div></td></tr>
							<tr><td>I'm not editable</td></tr> -->

						</table>
						</div>
				</div>
			</div>
			<?php include"footer.php";?>

	</body>
</html>
