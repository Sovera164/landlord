<?php
//start session
session_start();

//database connection
include("Database_connection.php");


//retrieving the landlord id
$landlord_id = $_SESSION['user_id'];

//retrieving all the prpoerties by landlord at the database
$query = "SELECT * FROM property WHERE landlord_id = '".$landlord_id."'";
$result = $db->query($query);

if(!$result){
    echo "Error: $db->error";
    echo "<br>There was an error with fetching the properties' data from database please try agian later";
}

$fetchedProperties = array();

while ($property = $result->fetch_assoc()){
    $fetchedProperties[] = $property;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        table{
            border-collapse: collapse;
            margin-top: 20px;
        }
        table tr td{
            padding: 0px 20px 0 20px;
        }
    </style>
</head>
<body>
    <h1>Landlord Dashboard</h1>
    <hr>
    <h3>My Properties</h3>

        <?php foreach($fetchedProperties as $property): ?>
            <table border="1px solid black">
        <tr>
            <td>Address</td>
            <td><?php echo $property['address'] ?></td>
        </tr>

        <tr>
            <td>Country</td>
            <td><?php echo $property['country'] ?></td>
        </tr>

        <tr>
            <td>City</td>
            <td><?php echo $property['city'] ?></td>
        </tr>

        <tr>
            <td>House Number</td>
            <td><?php echo $property['house_number'] ?></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><?php echo $property['price'] ?></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><?php echo $property['description'] ?></td>
        </tr>

        <tr>
            <td>Property Type</td>
            <td><?php echo $property['property_type'] ?></td>
        </tr>

        <tr>
            <td>Beds</td>
            <td><?php echo $property['beds'] ?></td>
        </tr>

        <tr>
            <td>Baths</td>
            <td><?php echo $property['baths'] ?></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><?php echo $property['date'] ?></td>
        </tr>

        <tr>
            <td><a href="edit_property.php?property_id=<?php echo $property['property_id'] ?>">Edit</a></td>
            <td><a href="delete_property.php?property_id=<?php echo $property['property_id'] ?>">Delete</a></td>
        </tr>
        </table>
<?php endforeach   ?>
    
</body>
</html>