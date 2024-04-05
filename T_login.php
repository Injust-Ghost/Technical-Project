<?php

$db_host = "localhost";
$db_name = "project";
$db_user = "neel";
$db_password = "tech@123";
//connects database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//till here all code goes in all php files


//login processing starts here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['loginUsername']);
    $password = mysqli_real_escape_string($conn, $_POST['loginPassword']);
    session_start();
    $_SESSION["rsu"]=$username;
   
    $sql = "SELECT * FROM teacher WHERE Employee_Code = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

       
        // if (password_verify($password, $row['Password'])) {
            
            header('Location: Admin/teacher.php'); 
        } else {
            echo '<script>window.prompt("Username or password is incorrect.");</script>';
        }
    }
    else {
        echo '<script>window.prompt("Username or password is incorrect.");</script>';
    }
//line below goes everywhere
    mysqli_close($conn);
// }
?>
