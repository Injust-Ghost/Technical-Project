<html>
    <head>
        <style>
        th:not(:first-child):hover {
            background-color: #030721;
            color: #050A30;
        }
        a {
            text-decoration: none;
            color: #F1E3D2;
        }
        body {
            margin: 0px;
        }
        .blinking {
        animation: blink 1s infinite alternate;
        }
        .roboto-font {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }
        .onthego-font {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
        }
        @keyframes blink {
            from {
                background-color: transparent;
            }
            to {
                background-color: grey;
            }
        }
        #details-box {
            position: absolute;
            top: 60px;
            right: 50px;
            width: auto;
            height: auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            text-align: left;
            z-index: 1;
        }
        #profile-img-container {
            position: relative;
            display: inline-block;
            left: 80px;
        }
        #profile-img:hover + #details-box,
        #profile-img-container.clicked #details-box {
            opacity: 1;
        }
        </style>
    </head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
        <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
        <thead>
            <tr>
                <th class="onthego-font"><a href="teacher.php" target="_parent">ON THE GO</a></th>
                <th class="roboto-font"><a href="../Teacher/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                <th class="roboto-font"><a href="../Teacher/search.php" target="_parent" >Floor Search</a></th>
                <th class="roboto-font"><a href="../Teacher/Contact_Us.php" target="_parent">Contact Us</a></th>
                <th class="roboto-font"><a href="../Teacher/FAQ.php" target="_parent">FAQ's</a></th>
                <th align="right" id="profile-img-container">
                    <img id="profile-img" src="../Teacher/Images/account.png" height="50" width="50">
                        <div id="details-box">
                            <?php
                                include 'fetch_teacher_details.php';
                            ?>
                        </div>
                </th>
            </tr>
        </thead>
    </table>
        <table>
            <tr>
                <td>
                    <?php
                        error_reporting(E_ALL & ~E_WARNING);

                        // Suppress display of errors
                        ini_set('display_errors', 0);

                        if(isset($_SESSION["rsu"])) {
                            $dr = $_SESSION["rsu"];
                            //echo $rd;

                            $db_host = "localhost";
                            $db_name = "project";
                            $db_user = "neel";
                            $db_password = "tech@123";

                            $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql1 = "SELECT Initials FROM teacher WHERE Employee_code=$dr";
                            $result1 = mysqli_query($conn, $sql1);
                            $row = mysqli_fetch_assoc($result1);

                            $Init=$row["Initials"];

                            echo "<table border='1' width='100%' height='100%'>";
                            echo "<thead><tr><td>MONDAY</td><td>TUESDAY</td><td>WEDNESDAY</td><td>THURSDAY</td><td>FRIDAY</td><td>SATURDAY</td></tr></thead>";

                            for($i = 1; $i <= 10; $i++) {
                                echo "<tr>";
                                for($j = 11; $j <= 16; $j++) {
                                    $sql4 = "SELECT subject, faculty, venue, Batch, Course, Specialization FROM time_table WHERE Faculty='$Init' AND t_id='$i' AND d_id='$j'";
                                    $result4 = mysqli_query($conn, $sql4);
                                    $row4 = mysqli_fetch_assoc($result4);
                                    $v=$i.$j;
                                    $x=$row4["venue"];
                                    echo "<td width='250px' height='60.5px' align='center' id=$v value=$x  onclick='find(id)'>".$row4["subject"]."<br>".$row4["faculty"]."<br>".$row4["venue"]."<br>".$row4["Course"]." ".$row4["Specialization"]."<br>".$row4["Batch"]."</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</table>";

                            mysqli_close($conn); // Close the connection
                        }
                    ?>
                </td>     
            </tr>
        </table>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var profileImg = document.getElementById('profile-img');
            var detailsBox = document.getElementById('details-box');

            profileImg.addEventListener('click', function(event) {
                detailsBox.parentNode.classList.toggle('clicked');
            });

            document.addEventListener('click', function(event) {
                if (!profileImg.contains(event.target)) {
                    detailsBox.parentNode.classList.remove('clicked');
                }
            });
        });
    </script>
    <script>
    function find(id) {
        var venue = document.getElementById(id).getAttribute('value');
        sessionStorage.setItem('venueValue',venue);
        var floor = venue.charAt(2);
        switch (floor) {
            case '1':
                window.location.href = 't_floors/floor1.php';
                break;
            case '2':
                window.location.href = 't_floors/floor2.php';
                break;
            case '3':
                window.location.href = 't_floors/floor3.php';
                break;
            case '4':
                window.location.href = 't_floors/floor4.php';
                break;
            case '5':
                window.location.href = 't_floors/floor5.php';
                break;
            case '6':
                window.location.href = 't_floors/floor6.php';
                break;
            case '7':
                window.location.href = 't_floors/floor7.php';
                break;
            case '8':
                window.location.href = 't_floors/floor8.php';
                break;
            default:
                break;
            }
        }
    </script>
    <script>
        function updateTimetable() {
            var currentTime = new Date();
            var hour = currentTime.getHours();
            var minute = currentTime.getMinutes();
            var day = currentTime.getDay();

            if (day === 1) {
                var cellId;
                if (hour === 8) {
                    cellId = '111';
                } else if (hour === 9) {
                    cellId = '211';
                } else if (hour === 10) {
                    cellId = '311';
                } else if (hour === 11) {
                    cellId = '411';
                } else if (hour === 12) {
                    cellId = '511';
                } else if (hour === 13) {
                    cellId = '611';
                } else if (hour === 14) {
                    cellId = '711';
                } else if (hour === 15) {
                    cellId = '811';
                } else if (hour === 16) {
                    cellId = '911';
                } else {
                    cellId = '1011';
                }
                var cell = document.getElementById(cellId);
                cell.classList.add('blinking');
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
                cell.classList.add('blinking');
            }               
            if (day === 3) {
                var cellId;
                if (hour === 8) {
                    cellId = '113';
                } else if (hour === 9) {
                    cellId = '213';
                } else if (hour === 10) {
                    cellId = '313';
                } else if (hour === 11) {
                    cellId = '413';
                } else if (hour === 12) {
                    cellId = '513';
                } else if (hour === 13) {
                    cellId = '613';
                } else if (hour === 14) {
                    cellId = '713';
                } else if (hour === 15) {
                    cellId = '813';
                } else if (hour === 16) {
                    cellId = '913';
                } else {
                    cellId = '1013';
                }
                var cell = document.getElementById(cellId);
                cell.classList.add('blinking');
            }
            if (day === 4) {
                var cellId;
                if (hour === 8) {
                    cellId = '114';
                } else if (hour === 9) {
                    cellId = '214';
                } else if (hour === 10) {
                    cellId = '314';
                } else if (hour === 11) {
                    cellId = '414';
                } else if (hour === 12) {
                    cellId = '514';
                } else if (hour === 13) {
                    cellId = '614';
                } else if (hour === 14) {
                    cellId = '714';
                } else if (hour === 15) {
                    cellId = '814';
                } else if (hour === 16) {
                    cellId = '914';
                } else {
                    cellId = '1014';
                }
                var cell = document.getElementById(cellId);
                cell.classList.add('blinking');
            }
            if (day === 5) {
                var cellId;
                if (hour === 8) {
                    cellId = '115';
                } else if (hour === 9) {
                    cellId = '215';
                } else if (hour === 10) {
                    cellId = '315';
                } else if (hour === 11) {
                    cellId = '415';
                } else if (hour === 12) {
                    cellId = '515';
                } else if (hour === 13) {
                    cellId = '615';
                } else if (hour === 14) {
                    cellId = '715';
                } else if (hour === 15) {
                    cellId = '815';
                } else if (hour === 16) {
                    cellId = '915';
                } else {
                    cellId = '1015';
                }
                var cell = document.getElementById(cellId);
                cell.classList.add('blinking');
            }
            if (day === 6) {
                var cellId;
                if (hour === 8) {
                    cellId = '116';
                } else if (hour === 9) {
                    cellId = '216';
                } else if (hour === 10) {
                    cellId = '316';
                } else if (hour === 11) {
                    cellId = '416';
                } else if (hour === 12) {
                    cellId = '516';
                } else if (hour === 13) {
                    cellId = '616';
                } else if (hour === 14) {
                    cellId = '716';
                } else if (hour === 15) {
                    cellId = '816';
                } else if (hour === 16) {
                    cellId = '916';
                } else {
                    cellId = '1016';
                }
                var cell = document.getElementById(cellId);
                cell.classList.add('blinking');
            }

            setTimeout(updateTimetable, 750);
        }

        updateTimetable();
    </script>
</html>

