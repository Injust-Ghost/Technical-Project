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
                        <th align="right"><img src="../Student/Images/account.png" height="50" width="50"><img src></th>
                    </tr>
                </thead>
        </table>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 302</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 301</td>
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
                                    <td height="125" id="CR303">CR 303</td>
                                </tr>
                                <tr>
                                    <td height="85" id="TR302">TR 302</td>
                                </tr>
                                <tr>
                                    <td height="85" id="TR301">TR 301</td>
                                </tr>
                                <tr>
                                    <td height="125" id="GRLCR">Girls Common Room</td>
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
                                    <td width="250" height="120" id="CR309">CR 309</td>
                                    <td width="250" height="120" id="CR310">CR 310</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 3</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR308">CR 308</td>
                                        <td height="120" id="CR307">CR 307</td>
                                    
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
                                    <td height="160" id="CR304">CR 304</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="130" id="CR305">CR 305</td>
                                </tr>
                                <tr>
                                    <td height="130" id="CR306">CR 306</td>
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
                                    <td width="300" id="CR302">CR 302</td>
                                    <td width="300" id="CR301">CR 301</td>
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
                                    <td width="300" id="CC301">CC 301</td>
                                    <td width="300" id="TR303">TR 303</td>
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