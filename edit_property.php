<?php
//session control
session_start();

//database connection
include("Database_connection.php");


//retrieving property id
$property_id = $_GET['property_id'];


//selecting the current details
$query = "SELECT * FROM property WHERE property_id = '".$property_id."'";
$result = $db->query($query);

if(!$result){
    echo "Error: $db->error";
    echo "<br> There was an error with fetching the selected property's details";
}

$fetchedDetails = array();
while ($detail = $result->fetch_assoc()){
    $fetchedDetails[] = $detail;

    //details from database
    $address = $detail['address'];
    $country = $detail['country'];
    $city = $detail['city'];
    $house_number = $detail['house_number'];
    $price = $detail['price'];
    $description = $detail['description'];
    $property_type = $detail['property_type'];
    $beds = $detail['beds'];
    $baths = $detail['baths'];
    $date = $detail['date'];
    }



    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $post_address = $_POST['address'];
        $post_country = $_POST['country'];
        $post_city = $_POST['city'];
        $post_house_number = $_POST['house_number'];
        $post_price = $_POST['price'];
        $post_description = $_POST['description'];
        $post_property_type = $_POST['property_type'];
        $post_beds = $_POST['beds'];
        $post_baths = $_POST['baths'];
        $post_date = $_POST['date'];
    }

    //query to update the details 
    $update = "UPDATE property SET address = '".$post_address."', country = '".$post_country."', city = '".$post_city."', house_number = '".$post_house_number."', price = '".$post_price."', description = '".$post_description."', property_type = '".$post_property_type."', beds = '".$post_beds."', baths = '".$post_baths."', date = '".$post_date."'";
    $result = $db->query($update);

    if(!$result){
        echo "Error: $db->error";
        echo "There was an error with saving the changes please try again later";
    } else {
        header("Location: home.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property| Edit Details</title>
</head>
<body>
    <h1>Property| Edit Details</h1>
<form action ="edit_property.php" method = "POST">
    <table>
    <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $address ?>"></td>
        </tr>

        <tr>
            <td>Country</td>
            <td><input type="text" name="country" value="<?php echo $country ?>"></td>
        </tr>

        <tr>
            <td>City</td>
            <td><input type="text" name="city" value ="<?php echo $city ?>"></td>
        </tr>

        <tr>
            <td>House Number</td>
            <td><input type="text" name="house_number" value="<?php echo $house_number ?>"></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price ?>"></td>
        </tr>

        <tr>
            <td>Description</td>
            <td><input type="text" name="description" value="<?php echo $description ?>"></td>
        </tr>

        <tr>
            <td>Property Type</td>
            <td><input type="text" name="property_type" value="<?php echo $property_type ?>"></td>
        </tr>

        <tr>
            <td>Beds</td>
            <td><input type="text" name="beds" value="<?php echo $beds ?>"></td>
        </tr>

        <tr>
            <td>Baths</td>
            <td><input type="text" name="baths" value="<?php echo $baths ?>"></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><input type="date" name="date" value="<?php echo $date ?>"></td>
        </tr>

        <tr>
            <td>
            <button type="submit">Save Changes</button>
            </td>

        </tr>
    </table>
</form>
</body>
</html>