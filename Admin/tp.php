<html>
    <head>
        <style>
        a
        {
            text-decoration: none;
            color: black;
        }
        body
        {
            margin: 0px;
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
        <table  border='0' width='100%' height='90%'>
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
                                    echo "<td width='250px' id='$i.$j' align='center'>".$row4["subject"]."<br>".$row4["faculty"]."<br>".$row4["venue"]."<br>".$row4["Batch"]."</td>";
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
</html>
<?php
        date_default_timezone_set('Asia/Kolkata');
        $timestamp=date( 'H:i', time () );
        $day="Monday";
        if($day=='Monday')
        {
            if($timestamp>=8 AND $timestamp<9)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(111);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=9 AND $timestamp<10)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(211);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=10 AND $timestamp<11)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(311);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=11 AND $timestamp<12)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(411);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=12 AND $timestamp<13)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(511);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=13 AND $timestamp<14)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(611);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=14 AND $timestamp<15)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(711);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=15 AND $timestamp<16)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(811);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=16 AND $timestamp<17)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(911);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(1011);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
        }
        else
        if($day=='Tuesday')
        {
            if($timestamp>=8 AND $timestamp<9)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(112);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=9 AND $timestamp<10)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(212);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=10 AND $timestamp<11)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(312);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=11 AND $timestamp<12)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(412);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=12 AND $timestamp<13)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(512);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=13 AND $timestamp<14)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(612);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=14 AND $timestamp<15)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(712);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=15 AND $timestamp<16)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(812);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else if($timestamp>=16 AND $timestamp<17)
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(912);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
            else
            {
                echo "<script>                
                var x = list.value;
                var selectedClass = document.getElementById(1012);
                selectedClass.style.backgroundColor = 'grey';
                </script>";
            }
        }
    
?>
