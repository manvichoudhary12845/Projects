<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $eventName = $_POST["event"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate form data (add more validation as needed)

    // Connect to the database (adjust the connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "achievents";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert data into the database
    $sql = "INSERT INTO registrations (event, name, email) VALUES ('$eventName', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for registering for $eventName!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
