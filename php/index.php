<?php
$host = 'db';
$user = 'atul';
$password = 'redhat';
$db = 'test_db123';

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
	echo "CONNECTION FAILED" . $conn->connect_error;
}

echo 'Sucessfully connected to MYSQL';

?>
