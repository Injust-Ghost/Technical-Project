<html>
    <head>
        <link rel="stylesheet" href="floor.css">
    </head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
    <col width="300"><col width="150"><col width="150"><col width="150"><col width="100"><col width="100"><col width="100">
            <thead>
                <tr>
                    <th class="onthego-font"><a href="../../Admin/student.php" target="_parent">ON THE GO</a></th>
                    <th class="roboto-font"><a href="../NewMasterCal.php" target="_parent">Master Calendar</a></th>
                    <th class="roboto-font"><a href="../search.php" target="_parent" >Floor Search</a></th>
                    <th class='roboto-font'><a href="../../book/search.php" target="_parent" >Booking</a></th>
                    <th class="roboto-font"><a href="../Contact_Us.php" target="_parent">Contact Us</a></th>
                    <th class="roboto-font"><a href="../FAQ.php" target="_parent">FAQ's</a></th>
                    <th align="right" id="profile-img-container">
                        <img id="profile-img" src="../Images/account.png" height="50" width="50">
                            <div id="details-box">
                                <?php
                                    include '../../Admin/fetch_teacher_details.php';
                                ?>
                            </div>
                    </th>
                </tr>
            </thead>
        </table>
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
    
                function highlightCells() {
                    var cells = document.querySelectorAll('td');
                    cells.forEach(function(cell) {
                        var batch = cell.innerText.split('<br>')[3];
                        var division = cell.innerText.split('<br>')[4];
                        if (batch !== division && batch !== undefined && division !== undefined) {
                            cell.classList.add('highlighted-cell');
                        }
                    });
                }
    
                // Call the function to highlight cells initially
                highlightCells();
            });
        </script>
        <script>
            function myfunction() {
                var options = document.querySelectorAll('#list option');
                options.forEach(function (option) {
                    option.style.backgroundColor = '';
                });

                var x = list.value;
                var selectedClass = document.getElementById(x);
                selectedClass.style.backgroundColor = "cyan";
                selectedClass.scrollIntoView({ behavior: 'smooth', block: 'center' });

                var previouslySelectedClass = document.getElementById(list.getAttribute("data-selected"));
                if (previouslySelectedClass) {
                    previouslySelectedClass.style.backgroundColor = "";
                }

                list.setAttribute("data-selected", x);
            }
        </script>
        <form>
            <label for="options">Select the Class you want to find:</label>
            <select id="list" name="list">
                <option value="CR501" id="ClassName" name="ClassCode">CR501</option>
                <option value="CR502" id="ClassName" name="ClassCode">CR502</option>
                <option value="CR503" id="ClassName" name="ClassCode">CR503</option>
                <option value="CR504" id="ClassName" name="ClassCode">CR504</option>
                <option value="CR505" id="ClassName" name="ClassCode">CR505</option>
                <option value="CR506" id="ClassName" name="ClassCode">CR506</option>
                <option value="CR507" id="ClassName" name="ClassCode">CR507</option>
                <option value="CR508" id="ClassName" name="ClassCode">CR508</option>
                <option value="CL501" id="ClassName" name="ClassCode">CL501</option>
                <option value="CL502" id="ClassName" name="ClassCode">CL502</option> 
                <option value="CL503" id="ClassName" name="ClassCode">CL503</option>
                <option value="CL504" id="ClassName" name="ClassCode">CL504</option>
                <option value="CL505" id="ClassName" name="ClassCode">CL505</option>
                <option value="CL506" id="ClassName" name="ClassCode">CL506</option>
                <option value="TR501" id="ClassName" name="ClassCode">TR501</option>
                <option value="BOYCR" id="ClassName" name="ClassCode">Boys Commom Room</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 502</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 501</td>
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
                                    <td height="125" id="CR503">CR 503</td>
                                </tr>
                                <tr>
                                    <td height="85" id="CL501">CL 501</td>
                                </tr>
                                <tr>
                                    <td height="85" id="TR501">TR 501</td>
                                </tr>
                                <tr>
                                    <td height="125" id="BOYCR">Boys Common Room</td>
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
                                    <td width="250" height="120" id="CR508">CR 508</td>
                                    <td width="250" height="120" id="CR504">CR 504</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 5</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR507">CR 507</td>
                                        <td height="120" id="CR506">CR 506</td>
                                    
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
                                    <td height="80" id="CL502">CL 502</td>
                                </tr>
                                <tr>
                                    <td height="80" id="CL503">CL 503</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="130" id="CR504">CR 504</td>
                                </tr>
                                <tr>
                                    <td height="130" id="CR505">CR 505</td>
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
                                        <td width="300" id="CR502">CR 502</td>
                                        <td width="300" id="CR501">CR 501</td>
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
                                    <td width="200" id="CL506">CL 506</td>
                                    <td width="200" id="CL505">CL 505</td>
                                    <td width="200" id="CL504">CL 504</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>                               
                </tr>
            </tbody>
        </table>
    </body>
</html>
                