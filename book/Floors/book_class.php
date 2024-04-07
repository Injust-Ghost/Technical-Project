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
$time = $_POST['time'];
$day = $_POST['day'];
$division = $_POST['division'];
$subjectName = $_POST['subjectName'];
$duration = $_POST['duration']; 
$spec = $_POST['specialization'];
$course = $_POST["course"];
$semester = $_POST['semester'];
$faculty = $_POST["faculty"];
$batch = $_POST["batch"];

// Insert the booking into the timetable table
$sql = "INSERT INTO timetable (`T_ID`, `D_ID`, `Subject`, `Faculty`, `Course`, `Semester`, `Specialization`, `Division`, `Batch`, `Venue`) 
        VALUES ('$time','$day','$subjectName','$faculty','$course','$semester','$spec','$division','$batch','$venueId')";
if (mysqli_query($conn, $sql)) {
    echo "Booking successfully scheduled.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
