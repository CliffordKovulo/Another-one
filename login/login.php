<?php
if (isset($_POST['submit'])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "tourists";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO tours (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    header("Location: sites.html");
    exit();
}
?>