<?php
include('includes/config.php');
$sql = "DELETE FROM tblguide WHERE GuideName='" . $_GET["GuideName"] . "'";
$query = $dbh -> prepare($sql);
$query->execute();
header("location:manage-guide.php");
?>