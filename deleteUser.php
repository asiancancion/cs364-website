<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$query = "DELETE FROM USERS WHERE USERNAME = '$_POST[email]' ";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
