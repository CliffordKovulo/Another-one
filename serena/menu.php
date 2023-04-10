<?php
if (isset($_POST['submit'])) {
    // Get the form data
    $menu = $_POST['menu'];
    $persons = $_POST['persons'];
    $date = $_POST['date'];
    $roomtableno = $_POST['roomtableno'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "tourism";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO menu(menu, persons, date, roomtableno) VALUES ('$menu', '$persons','$date','$roomtableno')";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
       
    }
    echo "data successfully inserted"; 
    header("Location: hotel.html");
    exit();
}
?>