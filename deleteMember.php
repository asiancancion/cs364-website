<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$query = "DELETE FROM ORCHESTRA_MEMBER WHERE EMAIL = '$_POST[email]' AND FIRSTNAME = '$_POST[firstName]'";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
