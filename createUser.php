<?php
$db = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO USERS (USERNAME, PASSWORD_HASH, USER_ADMIN) VALUES ('$_POST[username]',$hashed_password,'$_POST[user_admin]',)";
$result = pg_query($query);
header("Location: ./admin.php");
exit;
?>
