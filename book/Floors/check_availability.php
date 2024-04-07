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
$spec = $_POST['specialization'];
$course = $_POST["course"];
$semester = $_POST['semester'];
$faculty = $_POST["faculty"];
$batch = $_POST["batch"];

// Query the database to check availability
$sql = "SELECT * FROM time_table WHERE Venue = '$venueId' AND T_ID = '$time' AND D_ID = '$day'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Venue is not available
    echo "The class is not available";
} else {
    // Venue is available
    // Insert the booking into the timetable table
    $sql = "INSERT INTO time_table (T_ID, D_ID, Subject, Faculty, Course, Semester, Specialization, Division, Batch, Venue) 
            VALUES ('$time','$day','$subjectName','$faculty','$course','$semester','$spec','$division','$batch','$venueId')";
    if (mysqli_query($conn, $sql)) {
        echo "The class is Available";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>