<?php
include('includes/config.php');
$sql = "DELETE FROM tbltourpackages WHERE PackageName='" . $_GET["PackageName"] . "'";
$query = $dbh -> prepare($sql);
$query->execute();
header("location:manage-packages.php");
?>