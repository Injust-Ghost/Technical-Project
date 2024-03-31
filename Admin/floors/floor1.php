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
                        <th align="right"><img src="../Images/account.png" height="50" width="50"><img src></th>
                    </tr>
                </thead>
        </table>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 102</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 101</td>
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
                                    <td height="90" id="CR103">CR 103</td>
                                </tr>
                                <tr>
                                    <td height="90" id="CR102">CR 102</td>
                                </tr>
                                <tr>
                                    <td height="90" id="CR101">TR 101</td>
                                </tr>
                                <tr>
                                    <td height="50">Washrooms</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="75" id="CL102">CL 102</td>
                                </tr>
                                <tr>
                                    <td height="75" id="CL101">CL 101</td>
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
                                    <td width="250" height="120" id="CR107">CR 107</td>
                                    <td width="250" height="120" id="CR108">CR 108</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 1</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR106">CR 106</td>
                                        <td height="120" id="CR105">CR 105</td>
                                    
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
                                    <td height="210" id="CR104">CR 104</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="210" id="">NA</td>
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
                                        <td width="300" id="HRDL3">Hardware Lab 3</td>
                                        <td width="300" id="HRDL2">Hardware Lab 2</td>
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
                                    <td width="300" id="HRDL1">Hardware Lab 1</td>
                                    <td width="300" id="DEANO">Dean's Office</td>
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