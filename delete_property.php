<?php
//database connection
include("Database_connection.php");


//property id
$property_id = $_GET["property_id"];


 //deleting the property from the database
 $query = "DELETE FROM property WHERE property_id ='".$property_id."'";  
 $result =$db ->query($query);
 
 if($result){
    echo "property deleted succefully";
    header("Location:home.php");
    }else{
        echo "error deleting the property";
    }
?>