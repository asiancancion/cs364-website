<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$query = "UPDATE ORCHESTRA_MEMBER SET PHONE_NUMBER = '$_POST[phoneNum]', FIRSTNAME = '$_POST[firstName]', LASTNAME = '$_POST[lastName]', INSTRUMENT = '$_POST[instrument]', ABSENCE_NUMBER = '$_POST[absence_number]' WHERE EMAIL = '$_POST[email]'";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
