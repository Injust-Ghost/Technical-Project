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
            echo "<form action='../Student/logout.php' method='post' target='_parent' style='display: block;'>";
            echo "<button class='button'>Sign out</button>";
            echo "</form>";
        } else {
            echo "No student details found";
        }

        mysqli_close($conn); 
    } else {
        echo "User not logged in";
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            position: relative;
            width: 100%;
            height: 40px;
            background-color: #000;
            display: flex;
            align-items: center;
            color: white;
            flex-direction: column;
            justify-content: center;
            border: none;
            padding: 12px;
            gap: 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        .button::before {
            content: '';
            position: absolute;
            inset: 0;
            left: -4px;
            top: -1px;
            margin: auto;
            width: 104%;
            height: 48px;
            border-radius: 10px;
            background: linear-gradient(-45deg, #ffe4c4 0%, #ffdab9 100%);
            z-index: -10;
            pointer-events: none;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .button::after {
            content: "";
            z-index: -1;
            position: absolute;
            inset: 0;
            background: linear-gradient(-45deg, #ffe4c4 0%, #ffdab9 100%);
            transform: translate3d(0, 0, 0) scale(0.95);
            filter: blur(20px);
        }

        .button:hover::after {
        filter: blur(30px);
        }

        .button:hover::before {
            transform: rotate(-180deg);
        }

        .button:active::before {
            scale: 0.7;
        }


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
    
</body>
</html>
