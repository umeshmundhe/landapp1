<?php
	include"database.php";

	$sql="SELECT * FROM customer";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>cust_id</th>
					<th>customer name</th>
					<th>dob</th>
					<th>phone no</th>
					<th>gender</th>
					<th>address</th>
					<th>landtaken</th>
					<th>amt_paid</th>
					<th>payment mode</th>
					<th>chequeno</th>
					<th>receipt date</th>
				</tr>
				";
	if($res->num_rows>0)

	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
				<td>{$i}</td>
			 <td>{$row["cust_name"]}</td>
			 <td>{$row["cust_dob"]}</td>
			 <td>{$row["mob_no"]}</td>
			 <td>{$row["Gender"]}</td>
			 <td>{$row["cust_address"]}</td>
			 <td>{$row["land_taken"]}</td>
			 <td>{$row["amt_paid"]}</td>
			 <td>{$row["mod_of_payment"]}</td>
			 <td>{$row["cheque_no"]}</td>
			 <td>{$row["receipt_date"]}</td>

				<td><a href='staff_view.php?id={$row["cust_id"]}' class='btnb'>View</a></td>
				<td><a href='staff_delete.php?id={$row["cust_id"]}' class='btnr'>Delete</a></td>
				</tr>
			";
		}
				echo "</table>";
	}

	else
	{
		echo "<p>No Record Found</p>";
	}

?>
