<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "UPDATE USERS SET PASSWORD_HASH = '$hashed_password', USER_ADMIN = '$_POST[user_admin]' WHERE EMAIL = '$_POST[email]'";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
