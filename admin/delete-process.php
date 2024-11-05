<?php
include('includes/config.php');
$sql = "DELETE FROM tblusers WHERE EmailId='" . $_GET["EmailId"] . "'";
$query = $dbh -> prepare($sql);
$query->execute();
header("location:manage-users.php");
?>