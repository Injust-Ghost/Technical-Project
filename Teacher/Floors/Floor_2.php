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
                <option value="CR201" id="ClassName" name="ClassCode">CR201</option>
                <option value="CR202" id="ClassName" name="ClassCode">CR202</option>
                <option value="CR203" id="ClassName" name="ClassCode">CR203</option>
                <option value="CR204" id="ClassName" name="ClassCode">CR204</option>
                <option value="CR205" id="ClassName" name="ClassCode">CR205</option>
                <option value="CR206" id="ClassName" name="ClassCode">CR206</option>
                <option value="CR207" id="ClassName" name="ClassCode">CR207</option>
                <option value="CR208" id="ClassName" name="ClassCode">CR208</option>
                <option value="CR209" id="ClassName" name="ClassCode">CR209</option>
                <option value="TR201" id="ClassName" name="ClassCode">TR201</option>
                <option value="TR202" id="ClassName" name="ClassCode">TR202</option>
                <option value="TR203" id="ClassName" name="ClassCode">TR203</option>
                <option value="CC201" id="ClassName" name="ClassCode">CC201</option>
                <option value="PHYLB" id="ClassName" name="ClassCode">Physics Lab</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
        <table height="100" width="100%" border="1">
            <tbody>
                <tr>
                    <td width="600">Faculty Room 202</td>
                    <td width="200">Washrooms</td>
                    <td width="100">Stairs</td>
                    <td width="600">Faculty Room 201</td>
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
                                    <td height="140" id="TR203">TR 203</td>
                                </tr>
                                <tr>
                                    <td height="140" id="TR202">TR 202</td>
                                </tr>
                                <tr>
                                    <td height="140" id="TR201">TR 201</td>
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
                                    <td width="250" height="120" id="CR208">CR 208</td>
                                    <td width="250" height="120" id="CR209">CR 209</td>
                                </tr>
                                <tr>
                                    <td colspan="2" height="182">FLOOR 2</td>
                                </tr>
                                <tr>
                                    
                                        <td height="120" id="CR207">CR 207</td>
                                        <td height="120" id="CR206">CR 206</td>
                                    
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
                                    <td height="210" id="CR203">CR 203</td>
                                </tr>
                                <tr>
                                    <td height="50">Exit</td>
                                </tr>
                                <tr>
                                    <td height="210" id="CR204">CR 204</td>
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
                                        <td width="300" id="CR202">CR 202</td>
                                        <td width="300" id="CR201">CR 201</td>
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
                                    <td width="300" id="CC201">CC 201</td>
                                    <td width="300" id="PHYLB">Physics Lab</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>                               
                </tr>
            </tbody>
        </table>
    </body>
</html>
                