<?php
$db_host = "localhost";
$db_name = "project";
$db_user = "neel";
$db_password = "tech@123";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get parameters from AJAX request
$venueId = $_POST['venue_id'];
$t_id=$_POST['time'];
$d_id=$_POST['day'] ;
$spec=$_POST['specialization'];
$course=$_POST["course"];
$semester=$_POST[ 'semester']; 
$faculty=$_POST["faculty"]; 
$batch=$_POST["batch"];  

// Query the database to check availability
$sql = "SELECT * FROM time_table WHERE venue = '$venueId' AND T_ID = '$time' AND D_ID = '$day'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Venue is not available
    echo "<script>prompt(not_available)</script>";
} else {
    // Venue is available
    // Prompt the user for division, subject name, and duration
    $division = $_POST['division'];
    $subject_name = $_POST['subjectName'];

    // Insert the booking into the timetable table
    $sql = "INSERT INTO time_table (`T_ID`, `D_ID`, `Subject`, `Faculty`, `Course`, `Semester`, `Specialization`, `Division`, `Batch`, `Venue`) 
            VALUES ('$t_id','$d_id','$subjectName','$faculty','$course','$semester','$spec','$division','$batch','$venueId')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>prompt(available)</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>