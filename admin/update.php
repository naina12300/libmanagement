<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"libs");
	$query = "update admin set name = '$_POST[name]',email = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>