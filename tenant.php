<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant system</title>
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

/* Main section styling */
main {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.search-bar {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    max-width: 800px;
    width: 100%;
}

.search-bar input[type="text"] {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.search-bar button {
    padding: 10px 20px;
    border: none;
    background-color: #333;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

.search-bar button:hover {
    background-color: #555;
}.form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    height: 100px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    background-color: #fff;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Fieldset and Legend */
fieldset {
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
}

legend {
    font-weight: bold;
    color: #333;
    padding: 0 10px;
}

/* Labels and Inputs */
label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
input[type="date"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
}

textarea {
    resize: vertical;
}

/* File Input */
input[type="file"] {
    padding: 5px 0;
}

/* Submit Button */
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #5cb85c;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #4cae4c;
}

/* Responsive Design */
@media (max-width: 600px) {
    form {
        padding: 10px;
    }

    fieldset {
        padding: 10px;
    }

    input[type="submit"] {
        padding: 10px;
    }
}



</style>

</head>
<body>
    <h1>Tenant system</h1>
    <header>
        <nav >
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
    <div class="form-container">
        <h2>Tenant Information Form</h2>
        <form action="/submit_form" method="POST">
            <div class="form-group">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full_name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="current-address">Current Address:</label>
                <input type="text" id="current-address" name="current_address" required>
            </div>
            
            <div class="form-group">
                <label for="property-address">Property Address:</label>
                <input type="text" id="property-address" name="property_address" required>
            </div>
            
            <div class="form-group">
                <label for="unit-number">Unit Number (if applicable):</label>
                <input type="text" id="unit-number" name="unit_number">
            </div>
            
            <div class="form-group">
                <label for="move-in-date">Move-in Date:</label>
                <input type="date" id="move-in-date" name="move_in_date" required>
            </div>
            
            <div class="form-group">
                <label for="lease-term">Lease Term:</label>
                <select id="lease-term" name="lease_term" required>
                    <option value="6_months">6 Months</option>
                    <option value="12_months">12 Months</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="maintenance-issue">Maintenance Issue Description:</label>
                <textarea id="maintenance-issue" name="maintenance_issue"></textarea>
            </div>
            
            <div class="form-group">
                <label for="maintenance-time">Preferred Time for Maintenance:</label>
                <select id="maintenance-time" name="maintenance_time">
                    <option value="morning">Morning (8 AM - 12 PM)</option>
                    <option value="afternoon">Afternoon (12 PM - 4 PM)</option>
                    <option value="evening">Evening (4 PM - 8 PM)</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="permission-to-enter">
                    <input type="checkbox" id="permission-to-enter" name="permission_to_enter"> I give permission for maintenance to enter my apartment if I am not home.
                </label>
            </div>
            
            <div class="form-group">
                <label for="emergency-contact-name">Emergency Contact Name:</label>
                <input type="text" id="emergency-contact-name" name="emergency_contact_name" required>
            </div>
            
            <div class="form-group">
                <label for="emergency-contact-phone">Emergency Contact Phone Number:</label>
                <input type="tel" id="emergency-contact-phone" name="emergency_contact_phone" required>
            </div>
            
            <div class="form-group">
                <label for="additional-comments">Additional Information or Requests:</label>
                <textarea id="additional-comments" name="additional_comments"></textarea>
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    </main>
    
</body>
</html>

