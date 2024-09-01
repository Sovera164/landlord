<?php
//session control
session_start();

//database connection
include("Database_connection.php");


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$error_message = "";

//fetch user data from the form
$username = $_POST['username'];
$password = $_POST['password'];

//retrieving data from the database
$query = "SELECT * FROM users WHERE username = '".$username."'";
$result = $db->query($query);

if(!$result){
  echo "There was an error with database connection";
}

if($result->num_rows == 0){
  $error_message = "Users does not exist";
}

//password verification
$fetchedData = array();
while ($row = $result->fetch_assoc()){
  $fetchedData[] = $row;

  $role = $row['role'];
  $new_password = $row['password'];
  $user_id = $row['user_id'];
}

if (password_verify($password, $new_password)){
    //landlord / tenant id
    $_SESSION['user_id'] = $user_id;


    if($role == 'landlord'){
      header("Location: Landlord.php");
    } else {
      header("Location: tenant.php");
    }
} else {
  $error_message = "Incorrect password plese try again";
  echo "<a href='login.php'>Login</a>";
}
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|</title>
    <style>
        /* Reset some default browser styles */
        body, h1, header, nav, main, section, input, button {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        /* Basic body styling */
        body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f4f4f4;
        padding: 0 20px;
        }

        /* Heading styling */
        h1 {
        text-align: center;
        margin-top: 20px;
        font-size: 2.5em;
        color: #333;
        }

        /* Header and navigation styling */
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
        font-size: 1em;
        }

        nav a:hover {
        text-decoration: underline;

        }
      form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
          }

          label {
            display: block;
            font-size: 1rem;
            color: #555;
            margin-bottom: 0.5rem;
            font-weight:bold;
          }

          input[type="text"],
          input[type="email"],
          input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
          }

          button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
          }

          button:hover {
            background-color: #0056b3;
          }

          button:focus {
            outline: none;
          }  
              </style>

    
       <h1>Landlord system</h1>
  <header>
        <nav >
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">logIn</a>
            <a href="register.php">Sign Up</a>
        </nav>
    </header>

    <h1>system|register</h1>

    <form action="login.php" method ="post">

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   echo  "<label for='error;>Error:</label>";
    echo "<input type='text' name='error' value = $error_message ><br><br>";
  }
?>
      <label for="username">Username:</label>
      <input type="text" name="username"><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password"><br><br>
<button type="submit">Login</button>
<a href="register.php">Sign Up</a>
    </form>


</body>
</html>