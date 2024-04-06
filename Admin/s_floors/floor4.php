<!DOCTYPE html>
<html lang="en">
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
                <td width="600">Faculty Room 402</td>
                <td width="200">Washrooms</td>
                <td width="100">Stairs</td>
                <td width="600">Faculty Room 401</td>
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
                                <td height="70" id="CL406">CL 406</td>
                            </tr>
                            <tr>
                                <td height="70" id="CL405">CL 405</td>
                            </tr>
                            <tr>
                                <td height="70" id="CL404">CL 404</td>
                            </tr>
                            <tr>
                                <td height="70" id="CL403">CL 403</td>
                            </tr>
                            <tr>
                                <td height="70" id="CL402">CL 402</td>
                            </tr>
                            <tr>
                                <td height="70" id="CL401">CL 401</td>
                            </tr>
                            <tr>
                                <td height="45">Washrooms</td>
                            </tr>
                            <tr>
                                <td height="45">Exit</td>
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
                                <td width="250" height="120" id="CR407">CR 407</td>
                                <td width="250" height="120" id="CR408">CR 408</td>
                            </tr>
                            <tr>
                                <td colspan="2" height="170">FLOOR 4</td>
                            </tr>
                            <tr>
                                
                                    <td height="120" id="CR406">CR 406</td>
                                    <td height="120" id="CR405">CR 405</td>
                                
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
                                <td height="80" id="ESLAB">ES LAB</td>
                            </tr>
                            <tr>
                                <td height="80" id="DELAB">DE LAB</td>
                            </tr>
                            <tr>
                                <td height="50">Exit</td>
                            </tr>
                            <tr>
                                <td height="125" id="CR403">CR 403</td>
                            </tr>
                            <tr>
                                <td height="125" id="CR404">CR 404</td>
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
                                    <td width="300" id="CR402">CR 402</td>
                                    <td width="300" id="CR401">CR 401</td>
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
                                <td width="200" id="CL408">CL 408</td>
                                <td width="200" id="CL407">CL 407</td>
                                <td width="200" id="TR401">TR 401</td>
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