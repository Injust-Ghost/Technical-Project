<html>
    <table border="1" width="100%" height="100%">
        <thead>
            <tr>
                <td>TIME/DAY</td>
                <td>MONDAY</td>
                <td>TUESDAY</td>
                <td>WEDNESDAY</td>
                <td>THURSDAY</td>
                <td>FRIDAY</td>
                <td>SATURDAY</td>
            </tr>
        </thead>
<?php
    $rd= $_GET['username']; 
    
    $db_host = "localhost";
    $db_name = "techproject";
    $db_user = "Neel Mehta";
    $db_password = "SerialkillerX7";
    
    //connects database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql1="SELECT Division FROM student WHERE Sap_ID=$rd";
    $div=mysqli_query($conn, $sql1);
    $sql2="SELECT course FROM Student Where Sap_ID=$rd";
    $course=mysqli_query($conn, $sql2);
    $sql3="SELECT yr FROM Student Where Sap_ID=$rd";
    $year=mysqli_query($conn, $sql3);
    for($i=1;$i<=10;$i++)
    {
        echo="<tr>"
        for($j=11;$j<=16;$j++)
        {
            $sql4="SELECT class,Sub,initial FROM timetable WHERE div=$div AND course=$course AND yr=$year AND t-id=$i AND d-id=$j";
            $result=$conn->query($sql4);
            echo = "<script><td>".$result["class"].$result["Sub"].$result["initial"]."</td></script>"
        }
        echo="</tr>"
    }
    
?>
    </table>
</html>