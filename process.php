<?php
include_once('db.php');
$fname = mysql_real_escape_string( $_POST["fname"]);
$lname = mysql_real_escape_string( $_POST["lname"]);
$email = mysql_real_escape_string( $_POST["email"]);

$sql = "INSERT INTO users VALUES ('','$fname','$lname','$email') ";
if( mysql_query(sql))
echo "Inserted Successfully";
else
echo "Insertion Failed";


?>