<?php
	include"database.php";
	session_start();

	$s="delete from plot where plot_id={$_GET["plot_id"]}";
	$db->query($s);
	echo "<script>window.open('add_class.php?mes=Data Deleted.','_self');</script>"
?>
