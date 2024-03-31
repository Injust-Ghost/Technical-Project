<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="floor.css">
</head>
    <body>
        <table height="10%" width="100%" border="0" bgcolor="bisque">
            <col width="570"><col width="400"><col width="300">
                <thead>
                    <tr>
                        <th><a href="../Home.html" target="_parent">ON THE GO</a></th>
                        <th>DETAILS</th>
                        <th align="right"><img src="../../Student/Images/account.png" height="50" width="50"><img src></th>
                    </tr>
                </thead>
        </table>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 702</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 701</td>
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
                                    <td height="420" id="LIBRY">Library</td>
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
                                    <td width="250" height="120" id="CL706">CL 706</td>
                                    <td width="250" height="120" id="CC702">CC702</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 7</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR704">CR 704</td>
                                        <td height="120" id="CR703">CR 703</td>
                                    
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
                                    <td height="140" id="CR702">CR 702</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="70" id="CL701">CL 701</td>
                                </tr>
                                <tr>
                                    <td height="70" id="CL702">CL 702</td>
                                </tr>
                                <tr>
                                    <td height="70" id="CL703">CL 703</td>
                                </tr>
                                <tr>
                                    <td height="70" id="CL704">CL 704</td>
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
                                        <td width="300" id="CC701">CC 701</td>
                                        <td width="300" id="CR701">CR 701</td>
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
                                    <td width="300" id="ARVRL">AR/VR Lab</td>
                                    <td width="300" id="CL705">CL 705</td>
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