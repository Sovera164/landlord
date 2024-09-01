<?php

//database connection
include ("Database_connection.php");
session_start();


    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $type = $_POST['type'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $rent = $_POST['rent'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $landlord_id = $_SESSION['user_id'];


$query = "INSERT INTO property(landlord_id,address,country,city,house_number,price,description,property_type,beds,baths,date)
VALUES ('".$landlord_id."','".$address."', '".$state."', '".$city."', '".$code."', '".$rent."', '".$description."', '".$type."', '".$beds."', '".$baths."', '".$date."')"; 
$result = $db->query($query);

if(!$result){
    echo "Error: $db->error";
    echo "<br> There was an error with saving your details";
} else {
    header("Location: Landlord.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Registration Details</title>
    <style>
        /* Same styling as the previous example */
    
        body,
        h1,
        header,
        nav,
        main,
        section {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 2.5rem;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .property-details {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .property-details h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .property-details p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .property-details span {
            display: block;
            margin-left: 10px;
            font-weight: normal;
        }
    

    </style>
</head>

<body>
    <h1>Landlord System</h1>
    <header>
        <nav>
            <a href="home.php">Home</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
            <a href="#">Sign In</a>
            <a href="#">About</a>
            <a href="register.html">Sign Up</a>
        </nav>
    </header>

    <main>
        <div class="property-details">
            <h2>Property Registration Details</h2>
            <p>Property Type: <span><?php echo htmlspecialchars($_POST['type']); ?></span></p>
            <p>Address: <span><?php echo htmlspecialchars($_POST['address']); ?></span></p>
            <p>Number of Bedrooms: <span><?php echo htmlspecialchars($_POST['beds']); ?></span></p>
            <p>Number of Bathrooms: <span><?php echo htmlspecialchars($_POST['baths']); ?></span></p>
            <p>Rent Amount: <span>$<?php echo htmlspecialchars($_POST['rent']); ?></span></p>
            <p>Availability Date: <span><?php echo htmlspecialchars($_POST['date']); ?></span></p>
            <p>City: <span><?php echo htmlspecialchars($_POST['city']); ?></span></p>
            <p>State: <span><?php echo htmlspecialchars($_POST['state']); ?></span></p>
            <p>House number: <span><?php echo htmlspecialchars($_POST['code']); ?></span></p>
            <p>Property Description: <span><?php echo htmlspecialchars($_POST['description']); ?></span></p>
            <form action="edit_property.php" metod="post">
                <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                <input type="submit" value="edit">
            </form>    
            <form action="delete_property.php" method="POST" onsubmit="return confim('are you sure want to delete this property?');">

                 <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                 <input type="submit" value="delete">

             </form> 
        </div>

     
    </main>
</body>

</html>
