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
                                include '../fetch_teacher_details.php';
                            ?>
                        </div>
                </th>
            </tr>
        </thead>
    </table>
        <table height="100" width="100%" border="0">
            <tbody>
                <tr>
                    <td>
                        <table height="100%" width="100%" border="1">
                            <tr>
                                <td width="600">Faculty Room 802</td>
                                <td width="200">Washrooms</td>
                                <td width="100">Stairs</td>
                            </tr>
                        </table>
                    </td>
                    <td width="100"></td>
                    <td>
                        <table width="100%" height="100%" border="1">
                            <tr>
                                <td width="100" id="3DPRL">3D Printing Lab</td>
                                <td width="500">Faculty Room 801</td>
                            </tr>
                        </table>
                    </td>                    
                </tr>
            </tbody>
        </table>
        <br><br><br><br>
        <table border="0" width="100%">
            <tbody>
                <tr>
                    <td width="300" rowspan="6">
                        <table border="1" width="100%">
                            <tbody>
                                <tr>
                                    <td height="90" id="PNMCL">Pneumatic Lab</td>
                                </tr>
                                <tr>
                                    <td height="90" id="SIOTL">Sensor IOT Lab</td>
                                </tr>
                                <tr>
                                    <td height="90" id="AUTOL">Automation Lab</td>
                                </tr>
                                <tr>
                                    <td height="75" id="CL807">CL 807</td>
                                </tr>
                                <tr>
                                    <td height="75" id="HYDRL">Hydraulics Lab</td>
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
                                    <td width="250" height="120" id="VCRO1">V.C. Room 1</td>
                                    <td width="250" height="120" id="VCRO2">V.C. Room 2</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 8</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="COCE1">Computer Center 1</td>
                                        <td height="120" id="COCE2">Computer Center 2</td>
                                    
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
                                    <td height="200" id="CC801">CC 801</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="80" id="CL803">CL 803</td>
                                </tr>
                                <tr>
                                    <td height="70" id="CL802">CL 802</td>
                                </tr>
                                <tr>
                                    <td height="70" id="RECED">Recording and Editing Studio</td>
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
                                        <td width="300" id="PLCM1">Placement 1</td>
                                        <td width="300" id="PLCM2">Placement 2</td>
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
                                    <td width="300" id="CL804">CL 804</td>
                                    <td width="300" id="CR801">CR 801</td>
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
    console.log("Retrieved venue value:", venueValue);
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