/*<
    ?php
if (isset($_POST['submit'])) {
    // Get the form data
    $people = $_POST['people'];
    $rooms = $_POST['rooms'];
    $datei = $_POST['datei'];
    $dateo = $_POST['dateo'];
    $menu = $_POST['menu'];
    $persons = $_POST['persons'];
    $date= $_POST['date'];
    $roomtable = $_POST['roomtable'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "tourism";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO menu (rooms, datei, dateo, menu, persons, date, roomtable) VALUES ('$people', '$rooms','$datei','$dateo', '$menu', '$persons', '$date','$roomtable')";
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
*/