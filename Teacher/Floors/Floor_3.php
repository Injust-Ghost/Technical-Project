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
                <option value="CR301" id="ClassName" name="ClassCode">CR301</option>
                <option value="CR302" id="ClassName" name="ClassCode">CR302</option>
                <option value="CR303" id="ClassName" name="ClassCode">CR303</option>
                <option value="CR304" id="ClassName" name="ClassCode">CR304</option>
                <option value="CR305" id="ClassName" name="ClassCode">CR305</option>
                <option value="CR306" id="ClassName" name="ClassCode">CR306</option>
                <option value="CR307" id="ClassName" name="ClassCode">CR307</option>
                <option value="CR308" id="ClassName" name="ClassCode">CR308</option>
                <option value="CR309" id="ClassName" name="ClassCode">CR309</option>
                <option value="CR310" id="ClassName" name="ClassCode">CR310</option> 
                <option value="TR301" id="ClassName" name="ClassCode">TR301</option>
                <option value="TR302" id="ClassName" name="ClassCode">TR302</option>
                <option value="TR303" id="ClassName" name="ClassCode">TR303</option>
                <option value="CC301" id="ClassName" name="ClassCode">CC301</option>
                <option value="GRLCR" id="ClassName" name="ClassCode">Girls Commom Room</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
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
                