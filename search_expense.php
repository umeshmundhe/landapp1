<?php
	include"database.php";

	$sql="SELECT * FROM expense";
	$res=$db->query($sql);
 /** `exp_id`, `amt`, `mode`, `wirecompund`, `roadexpense`,'responsible', `details`, `date */
	echo "<table border='1px' class='table'>
				<tr>
          <th>Sr. No</th>
					<th>amt</th>
					<th>mode</th>
					<th>wirecompund</th>
      		<th>roadexpense</th>
          <th>responsible</th>
					<th>details</th>
					<th>date</th>
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
			 <td>{$row["amt"]}</td>
			 <td>{$row["mode"]}</td>
       <td>{$row["wirecompund"]}</td>
			 <td>{$row["roadexpense"]}</td>
       <td>{$row["responsible"]}</td>
       <td>{$row["details"]}</td>
			 <td>{$row["date"]}</td>

				<td><a href='expense_view.php?id={$row["exp_id"]}' class='btnb'>View</a></td>
				<td><a href='expense_delete.php?id={$row["exp_id"]}' class='btnr'>Delete</a></td>
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
