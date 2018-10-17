<?php
$user = "root";
$password = "root"; //windows users leave this area blank
$host = "localhost";
$db = "db_ajax"; //name of the database you want to connect to

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "Unable to connect...";
    exit;
}

//echo "Connection Succesful";

//get all the car data
$myQuery = "SELECT * FROM mainmodel";
// make the query, get the result
$result = mysqli_query($conn, $myQuery);

$rows = array();

while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//send the entire result set as a json encoder array
echo json_encode($rows);
?>