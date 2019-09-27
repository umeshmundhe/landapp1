 <div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">Land information</a></li>
			<li class="li"><a href="add_plot.php"> Plot</a></li>
      <li class="li"><a href="add_customer.php"> Add Customer</a></li>
      <li class="li"><a href="view_customer.php">View customer</a></li>

      			<li class="li"><a href="logout.php">Logout</a></li>
		';


	}
	else{
		echo'
		


		';
	}


?>


</ul>

</div>
