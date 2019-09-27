<?php
	include"database.php";
	session_start();
	$s="delete from customer where cust_id={$_GET["cust_id"]}";
	$db->query($s);
	echo"<script>window.open('view_staff.php','_self');</script>";

?>
