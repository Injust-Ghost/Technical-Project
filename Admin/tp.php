<!DOCTYPE html>
<html>
<head>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
        body {
            margin: 0px;
        }
        .blinking {
        animation: blink 1s infinite alternate; /* Smooth blinking transition */
    }

    @keyframes blink {
        from {
            background-color: transparent; /* Starting color */
        }
        to {
            background-color: grey; /* Ending color */
        }
    }
    </style>
</head>
<body>
    <table height="10%" width="100%" border="0" bgcolor="bisque">
        <col width="570"><col width="400"><col width="300">
        <thead>
            <tr>
                <th><a href="Home.html" target="_parent">ON THE GO</a></th>
                <th>DETAILS</th>
                <th align="right"><img src="../Student/Images/account.png" height="50" width="50"><img src></th>
            </tr>
        </thead>
    </table>
    <table border='0' width='100%' height='100%'>
        <tr>
            <td>
                <?php
                    session_start(); // Start the session
                    error_reporting(E_ALL & ~E_WARNING);

                    // Suppress display of errors
                    ini_set('display_errors', 0);

                    if(isset($_SESSION["usr"])) {
                        $rd = $_SESSION["usr"];
                        //echo $rd;

                        $db_host = "localhost";
                        $db_name = "project";
                        $db_user = "neel";
                        $db_password = "tech@123";

                        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql1 = "SELECT Division, course, semester, Batch FROM student WHERE Sap_ID=$rd";
                        $result1 = mysqli_query($conn, $sql1);
                        $row = mysqli_fetch_assoc($result1);

                        $div = $row['Division'];
                        $course = $row['course'];
                        $semester = $row['semester'];
                        $batch= $row['Batch'];

                        echo "<table border='1' width='100%' height='100%'>";
                        echo "<thead><tr><td>MONDAY</td><td>TUESDAY</td><td>WEDNESDAY</td><td>THURSDAY</td><td>FRIDAY</td><td>SATURDAY</td></tr></thead>";

                        for($i = 1; $i <= 10; $i++) {
                            echo "<tr>";
                            for($j = 11; $j <= 16; $j++) {
                                $sql4 = "SELECT subject, faculty, venue, batch FROM time_table WHERE `division`='$div' AND `semester`='$semester' AND (`Batch`='$batch' OR `Batch`='F' OR `Subject`='BREAK') AND `course`='$course' AND t_id='$i' AND d_id='$j'";
                                $result4 = mysqli_query($conn, $sql4);
                                $row4 = mysqli_fetch_assoc($result4);
                                $v=$i.$j;
                                $x=$row4["venue"];
                                echo "<td width='250px' align='center' id=$v value=$x  onclick='find(id)'>".$row4["subject"]."<br>".$row4["faculty"]."<br>".$row4["venue"]."<br>".$row4["Batch"]."</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";

                        mysqli_close($conn); 
                    }
                ?>
            </td>     
        </tr>
    </table>

    <script>
        function find(id) {
            x=document.GetElementByID(id).value;
            y=x/100;
            z=y%10;
            if(z==1)
            {
                window.location.href = 'floor1.html';
            }
            else
            if(z==2)
            {
                window.location.href = 'floor2.html';
            }
            else
            if(z==3)
            {
                window.location.href = 'floor3.html';
            }
            else
            if(z==4)
            {
                window.location.href = 'floor4.html';
            }
            else
            if(z==5)
            {
                window.location.href = 'floor5.html';
            }
            else
            if(z==6)
            {
                window.location.href = 'floor6.html';
            }
            else
            if(z==7)
            {
                window.location.href = 'floor7.html';
            }
            else
            {
                window.location.href = 'floor8.html';
            }
        }

    </script>
    <script>
        function updateTimetable() {
            var currentTime = new Date();
            var hour = currentTime.getHours();
            var minute = currentTime.getMinutes();
            var day = currentTime.getDay(); // 0 for Sunday, 1 for Monday, ..., 6 for Saturday

            if (day === 1) {
                if (hour === 8) {
                    document.getElementById('111').style.backgroundColor = 'grey';
                } else if (hour === 9) {
                    document.getElementById('211').style.backgroundColor = 'grey';
                } else if (hour === 10) {
                    document.getElementById('311').style.backgroundColor = 'grey';
                } else if (hour === 11) {
                    document.getElementById('411').style.backgroundColor = 'grey';
                } else if (hour === 12) {
                    document.getElementById('511').style.backgroundColor = 'grey';
                } else if (hour === 13) {
                    document.getElementById('611').style.backgroundColor = 'grey';
                } else if (hour === 14) {
                    document.getElementById('711').style.backgroundColor = 'grey';
                } else if (hour === 15) {
                    document.getElementById('811').style.backgroundColor = 'grey';
                } else if (hour === 16) {
                    document.getElementById('911').style.backgroundColor = 'grey';
                } else {
                    document.getElementById('1011').style.backgroundColor = 'grey';
                }
            }
            if (day === 2) {
                var cellId;
                if (hour === 8) {
                    cellId = '112';
                } else if (hour === 9) {
                    cellId = '212';
                } else if (hour === 10) {
                    cellId = '312';
                } else if (hour === 11) {
                    cellId = '412';
                } else if (hour === 12) {
                    cellId = '512';
                } else if (hour === 13) {
                    cellId = '612';
                } else if (hour === 14) {
                    cellId = '712';
                } else if (hour === 15) {
                    cellId = '812';
                } else if (hour === 16) {
                    cellId = '912';
                } else {
                    cellId = '1012';
                }
                
                var cell = document.getElementById(cellId);
            cell.classList.add('blinking'); // Add class to initiate smooth blinking transition
        }               
            if (day === 3) {
                if (hour === 8) {
                    document.getElementById('113').style.backgroundColor = 'grey';
                } else if (hour === 9) {
                    document.getElementById('213').style.backgroundColor = 'grey';
                } else if (hour === 10) {
                    document.getElementById('313').style.backgroundColor = 'grey';
                } else if (hour === 11) {
                    document.getElementById('413').style.backgroundColor = 'grey';
                } else if (hour === 12) {
                    document.getElementById('513').style.backgroundColor = 'grey';
                } else if (hour === 13) {
                    document.getElementById('613').style.backgroundColor = 'grey';
                } else if (hour === 14) {
                    document.getElementById('713').style.backgroundColor = 'grey';
                } else if (hour === 15) {
                    document.getElementById('813').style.backgroundColor = 'grey';
                } else if (hour === 16) {
                    document.getElementById('913').style.backgroundColor = 'grey';
                } else {
                    document.getElementById('1013').style.backgroundColor = 'grey';
                }
            }
            if (day === 4) {
                if (hour === 8) {
                    document.getElementById('114').style.backgroundColor = 'grey';
                } else if (hour === 9) {
                    document.getElementById('214').style.backgroundColor = 'grey';
                } else if (hour === 10) {
                    document.getElementById('314').style.backgroundColor = 'grey';
                } else if (hour === 11) {
                    document.getElementById('414').style.backgroundColor = 'grey';
                } else if (hour === 12) {
                    document.getElementById('514').style.backgroundColor = 'grey';
                } else if (hour === 13) {
                    document.getElementById('614').style.backgroundColor = 'grey';
                } else if (hour === 14) {
                    document.getElementById('714').style.backgroundColor = 'grey';
                } else if (hour === 15) {
                    document.getElementById('814').style.backgroundColor = 'grey';
                } else if (hour === 16) {
                    document.getElementById('914').style.backgroundColor = 'grey';
                } else {
                    document.getElementById('1014').style.backgroundColor = 'grey';
                }
            }
            if (day === 5) {
                if (hour === 8) {
                    document.getElementById('115').style.backgroundColor = 'grey';
                } else if (hour === 9) {
                    document.getElementById('215').style.backgroundColor = 'grey';
                } else if (hour === 10) {
                    document.getElementById('315').style.backgroundColor = 'grey';
                } else if (hour === 11) {
                    document.getElementById('415').style.backgroundColor = 'grey';
                } else if (hour === 12) {
                    document.getElementById('515').style.backgroundColor = 'grey';
                } else if (hour === 13) {
                    document.getElementById('615').style.backgroundColor = 'grey';
                } else if (hour === 14) {
                    document.getElementById('715').style.backgroundColor = 'grey';
                } else if (hour === 15) {
                    document.getElementById('815').style.backgroundColor = 'grey';
                } else if (hour === 16) {
                    document.getElementById('915').style.backgroundColor = 'grey';
                } else {
                    document.getElementById('1015').style.backgroundColor = 'grey';
                }
            }
            if (day === 6) {
                if (hour === 8) {
                    document.getElementById('116').style.backgroundColor = 'grey';
                } else if (hour === 9) {
                    document.getElementById('216').style.backgroundColor = 'grey';
                } else if (hour === 10) {
                    document.getElementById('316').style.backgroundColor = 'grey';
                } else if (hour === 11) {
                    document.getElementById('416').style.backgroundColor = 'grey';
                } else if (hour === 12) {
                    document.getElementById('516').style.backgroundColor = 'grey';
                } else if (hour === 13) {
                    document.getElementById('616').style.backgroundColor = 'grey';
                } else if (hour === 14) {
                    document.getElementById('716').style.backgroundColor = 'grey';
                } else if (hour === 15) {
                    document.getElementById('816').style.backgroundColor = 'grey';
                } else if (hour === 16) {
                    document.getElementById('916').style.backgroundColor = 'grey';
                } else {
                    document.getElementById('1016').style.backgroundColor = 'grey';
                }
            }

            setTimeout(updateTimetable, 750);
        }

        updateTimetable();
    </script>
</body>
</html>
