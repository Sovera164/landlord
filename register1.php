<?php
//session control 
session_start();


// Database connection
include("Database_connection.php");

// Assigning variables
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email']; // Assuming you want to get email as well
$role = $_POST['role'];

// Prepare and execute the query
$new_password = password_hash($password, PASSWORD_DEFAULT);

//insertint user details to the database
$user = "INSERT INTO users (username, email, phone, password, role)
        VALUES('".$username."', '".$email."', '".$phone."', '".$new_password."', '".$role."')";
//query execution
$result = $db->query($user);

if(!$result){
    echo "There was an error with the registration, please try again";
    echo "<a href='register.php'>Register Again</a>";
} else {
    if($role == 'landlord'){
    header("Location: Landlord.php");
} else {
    header("Location: tenant.php");
}
}

?>