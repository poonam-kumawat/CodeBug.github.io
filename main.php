<?php

$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    include 'dbcon.php';   
    
    $username = $_POST["username"]; 
	$email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from users where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `bug`(`id`, `username`, `email`, `password`, `cpassword`, `date`) VALUES ('$username', '$email', '$hash', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
}//end if   



// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
// 	$err = "";
// 	$name = $_POST["name"];
// 	$email = $_POST["email"];
// 	$password = $_POST["password"];
// 	$cpassword = $_POST["cpassword"];

// 	$exists = true;

// 	if(($password == $cpassword) && $exists){
		
// 	}
// }
 ?>