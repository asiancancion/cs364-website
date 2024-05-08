<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$query = "INSERT INTO ORCHESTRA_MEMBER (EMAIL, PHONE_NUMBER, FIRSTNAME, LASTNAME, INSTRUMENT, ABSENCE_NUMBER) VALUES ('$_POST[email]','$_POST[phoneNum]','$_POST[firstName]','$_POST[lastName]','$_POST[instrument]',0)";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
