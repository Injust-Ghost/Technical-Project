<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//error reporting

$db_host = "localhost";
$db_name = "techproject";
$db_user = "Neel Mehta";
$db_password = "SerialkillerX7";


$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//db connectivity

$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);


$sql = "SELECT * FROM user WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();
//getting user data from db+

if ($result->num_rows == 1) {
   
    $sql = "DELETE FROM user WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    //deleting acc

    if ($stmt->affected_rows > 0) {
        echo "Successfully deleted account";
    } else {
        die("Unable to delete account");
    }
} else {
    die("Account not found");
}


header('Location: login.html');


$conn->close();
?>
