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
if(isset($_SESSION["usr"])) {
    $rd=$_SESSION["usr"];
    echo $rd;
    $db_host = "localhost";
    $db_name = "project";
    $db_user = "neel";
    $db_password = "tech@123";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql1="SELECT Division FROM student WHERE Sap_ID=$rd";
    $div=mysqli_query($conn, $sql1);
    $sql2="SELECT course FROM student Where Sap_ID=$rd";
    $course=mysqli_query($conn, $sql2);
    $sql3="SELECT semester FROM student Where Sap_ID=$rd";
    $semester=mysqli_query($conn, $sql3);
    for($i=1;$i<=10;$i++)
    {
        echo "<tr>";
        for($j=11;$j<=16;$j++)
        {
            $sql4="SELECT subject,initials,venue FROM time_table WHERE div=$div AND course=$course AND semester=$semester AND t-id=$i AND d-id=$j";
            $result=$conn->query($sql4);
            echo "<script><td>".$result["subject"].$result["initials"].$result["venue"]."</td></script>";
        }
        echo "</tr>";
    }
}
?>
    </table>
</html>