<?php
    session_start();

    if(isset($_SESSION["rsu"])) {
        $user_id = $_SESSION["rsu"];

        $db_host = "localhost";
        $db_name = "project";
        $db_user = "neel";
        $db_password = "tech@123";

        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM teacher WHERE Employee_Code = $user_id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo "<table>";
            echo "<tr><th id='student-details-header' colspan='2'>Teacher Details</th></tr>";
            echo "<tr><td class='student-details-cell'>Employee_Code:</td><td class='student-details-cell'>" . $row["Employee_Code"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Name:</td><td class='student-details-cell'>" . $row["First Name"]. " " . $row["Last Name"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Initials:</td><td class='student-details-cell'>" . $row["Initials"] . "</td></tr>";
            echo "<tr><td class='student-details-cell'>Email ID:</td><td class='student-details-cell'>". $row["EMail"] . "</td></tr>";
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
            background: linear-gradient(-45deg, #6a75c8 0%, #6a75c8 100%);
            z-index: -10;
            pointer-events: none;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .button::after {
            content: "";
            z-index: -1;
            position: absolute;
            inset: 0;
            background: linear-gradient(-45deg, #6a75c8 0%, #6a75c8 100%);
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
