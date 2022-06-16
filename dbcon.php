<?php

$servername="localhost";
$username="root";
$password="";

$database="codebug";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
	echo "Connection Success";
}
else{
	die("Error". mysqli_connect_error());
}

?>



