<?php
$db_host = "localhost";
$db_name = "project";
$db_user = "neel";
$db_password = "tech@123";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname = $_POST["signupFname"];
$lname = $_POST["signupLname"];
$Div = $_POST["signupDiv"];
$batch = $_POST["signupBatch"];
$course = $_POST["signupCourse"];
$sapid = $_POST["signupSapID"];
$semester = $_POST["options"];
$password = $_POST["signupPassword"];
$cpassword = $_POST["signupPass"];

if ($password != $cpassword) {
    echo "<script>window.alert(`Password Does Not Match`)</script>";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement using a prepared statement
    $sql= "INSERT INTO student(SAP_ID,`First Name`,`Last Name`,Division,Batch,Course,Semester,Password)
    VALUES ('$sapid','$fname','$lname','$Div','$batch','$course','$semester','$password')";

    $result = mysqli_query($conn, $sql);
    header('Location: Student/Home.html'); 

}




mysqli_close($conn);
?>