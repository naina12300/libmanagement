<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"libs");
	$query = "update  set user name = '$_POST[name]',email = '$_POST[email]',mobile = '$_POST[mobile]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>