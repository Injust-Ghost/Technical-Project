<!DOCTYPE html>
<html>
<head>
    <style>
        
        #student-details-header {
            font-size: 20px;
            font-weight: bold;
            text-align: left; 
            padding-bottom: 10px; 
        }

        
        .student-details-cell {
            font-size: 18px;
            padding: 5px; 
            padding-left: 0;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION["usr"])) {
        $user_id = $_SESSION["usr"];

        $db_host = "localhost";
        $db_name = "project";
        $db_user = "neel";
        $db_password = "tech@123";

        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM student WHERE Sap_ID = $user_id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            
            echo "<table>";
            echo "<tr><th id='student-details-header' colspan='2'>Student Details</th></tr>"; 
            echo "<tr><td class='student-details-cell'>Name:</td><td class='student-details-cell'>" . $row["First Name"]. " " . $row["Last Name"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Division:</td><td class='student-details-cell'>" . $row["Division"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Course:</td><td class='student-details-cell'>" . $row["Course"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Specialization:</td><td class='student-details-cell'>" . $row["Specialization"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Batch:</td><td class='student-details-cell'>" . $row["Batch"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Semester:</td><td class='student-details-cell'>" . $row["Semester"] . "</td></tr>";
            echo "</table>";
        } else {
            echo "No student details found";
        }

        mysqli_close($conn); 
    } else {
        echo "User not logged in";
    }
    ?>
</body>
</html>
