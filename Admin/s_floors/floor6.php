<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="floor.css">
</head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
        <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
        <thead>
            <tr>
            <th class="onthego-font"><a href="../student.php" target="_parent">ON THE GO</a></th>
                <th class="roboto-font"><a href="../../Student/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                <th class="roboto-font"><a href="../../Student/search.php" target="_parent" >Floor Search</a></th>
                <th class="roboto-font"><a href="../../Student/Contact_Us.php" target="_parent">Contact Us</a></th>
                <th class="roboto-font"><a href="../../Student/FAQ.php" target="_parent">FAQ's</a></th>
                <th align="right" id="profile-img-container">
                    <img id="profile-img" src="../../Student/Images/account.png" height="50" width="50">
                        <div id="details-box">
                            <?php
                                include '../fetch_student_details.php';
                            ?>
                        </div>
                </th>
            </tr>
        </thead>
    </table>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 601</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 602</td>
                </tr>
            </tbody>
        </table>
        <br><br><br><br>
        <table border="0" width="100%" height="500">
            <tbody>
                <tr>
                    <td>
                        <table border="1" width="300" height="100%">
                            <tbody>
                                    <tr>
                                        <td height="120" id="CR604">CR 604</td>
                                    </tr>
                                    <tr>
                                        <td height="80" id="CL601">CL 601</td>
                                    </tr>
                                    <tr>
                                        <td height="80" id="TR601">TR 601</td>
                                    </tr>
                                    <tr>
                                        <td height="120" id="CR603">CR 603</td>
                                    </tr>
                                    <tr>
                                        <td height="50">Washrooms</td>
                                    </tr>
                                    <tr>
                                        <td height="50">Exit</td>
                                    </tr>
                            </tbody>
                        </table>
                    </td>
                    <td rowspan="6" width="200"></td>
                    <td rowspan="6">
                        <table border="1" width="100%" height="100%">
                            <tbody>
                                <tr>
                                    <td height="50" width="500" colspan="2">Lifts</td>
                                </tr>
                                <tr>
                                    <td width="250" height="120" id="CR608">CR 608</td>
                                    <td width="250" height="120" id="CR609">CR 609</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 6</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR607">CR 607</td>
                                        <td height="120" id="CR606">CR 606</td>
                                    
                                </tr>
                                <tr>
                                    <td height="50" colspan="2">Lifts</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
        
                    <td rowspan="6" width="200"></td>
                    <td width="300" rowspan="6">
                        <table border="1" width="100%">
                            <tbody>
                                <tr>
                                    <td height="80" id="ADVCL">Advance Communications Lab</td>
                                </tr>
                                <tr>
                                    <td height="80" id="DATCL">Data Communications Lab</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="80" id="CL603">CL 603</td>
                                </tr>
                                <tr>
                                    <td height="80" id="CL602">CL 602</td>
                                </tr>
                                <tr>
                                    <td height="100" id="CR605">CR 605</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br><br><br>
        <table width="100%" border="0">
            <tbody>
                <tr>
                    <td colspan="2">
                        <table height="100" width="100%" border="1">
                            <tbody>
                                <tr>
                                    <td height="100" width="300" id="CR602">CR 602</td>
                                    <td height="100" width="300" id="CR601">CR 601</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td height="100" width="300">
    
                    </td>
                    <td colspan="2">
                        <table height="100" width="100%" border="1">
                            <tbody>
                                <tr>
                                    <td width="300" id="ARINL">AI LAB</td>
                                    <td width="300" id="ROBOL">Robotics Lab</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<script>
    var venueValue = sessionStorage.getItem('venueValue');
    var cell = document.getElementById(venueValue);
    if (cell) {
        cell.classList.add('cyan');
        cell.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
</script>
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