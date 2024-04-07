<html>
    <head>
        <link rel="stylesheet" href="floor.css">
    </head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
            <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
            <thead>
                <tr>
                    <th class="onthego-font"><a href="../../Admin/student.php" target="_parent">ON THE GO</a></th>
                    <th class="roboto-font"><a href="../NewMasterCal.php" target="_parent">Master Calendar</a></th>
                    <th class="roboto-font"><a href="../search.php" target="_parent" >Floor Search</a></th>
                    <th class="roboto-font"><a href="../Contact_Us.php" target="_parent">Contact Us</a></th>
                    <th class="roboto-font"><a href="../FAQ.php" target="_parent">FAQ's</a></th>
                    <th align="right" id="profile-img-container">
                        <img id="profile-img" src="../../Student/Images/account.png" height="50" width="50">
                            <div id="details-box">
                                <?php
                                    include '../../Admin/fetch_student_details.php';
                                ?>
                            </div>
                    </th>
                </tr>
            </thead>
        </table>
        <script>
            function checkAvailability(venueId) {
                var time = prompt("Enter the time  ID:");
                var day = prompt("Enter the day ID:");
                var subjectName = prompt("Enter the subject name:");
                var faculty = prompt("Enter the Faculty name:");
                var course = prompt("Enter the Course:");
                var semester = prompt("Enter the Semester:");
                var specialization = prompt("Enter the Field you are in:");
                var division = prompt("Enter the division:");
                var batch = prompt("Enter the Batch:");

                if (time && day && subjectName && faculty && course && semester && specialization && division && batch && venueId) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "check_availability.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                if (xhr.responseText.trim() === "available") {
                                    var confirmBooking = confirm("Class is available. Do you want to book it?");
                                    if (confirmBooking) {
                                        bookClass(time, day, subjectName, faculty, course, semester, specialization, division, batch, venueId);
                                    }
                                } else {
                                    alert(xhr.responseText);
                                }
                            } else {
                                // Handle HTTP error status
                                alert("Error: " + xhr.status + " " + xhr.statusText);
                            }
                        }
                    };
                    // Encode parameters properly
                    var params = "time=" + encodeURIComponent(time) + "&day=" + encodeURIComponent(day) + "&subjectName=" + encodeURIComponent(subjectName) + "&faculty=" + encodeURIComponent(faculty) + "&course=" + encodeURIComponent(course) + "&semester=" + encodeURIComponent(semester) + "&specialization=" + encodeURIComponent(specialization) + "&division=" + encodeURIComponent(division) + "&batch=" + encodeURIComponent(batch) + "&venue_id=" + encodeURIComponent(venueId);
                    xhr.send(params);
                } else {
                    alert("Please enter all details.");
                }
            }

            function bookClass(time, day, subjectName, faculty, course, semester, specialization, division, batch, venueId) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "book_class.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert(xhr.responseText);
                    }
                };
                xhr.send("time=" + time + "&day=" + day + "&subject_name=" + subjectName + "&faculty=" + faculty + "&course=" + course + "&semester=" + semester + "&specialization=" + specialization + "&division=" + division + "&batch=" + batch + "&venue_id=" + venueId);
            }

            function assignClickEventToTDs() {
                var tds = document.querySelectorAll('td');
                tds.forEach(function(td) {
                    td.onclick = function() {
                        checkAvailability(this.id);
                    };
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                assignClickEventToTDs();
            });
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
                <option value="CR601" id="ClassName" name="ClassCode">CR601</option>
                <option value="CR602" id="ClassName" name="ClassCode">CR602</option>
                <option value="CR603" id="ClassName" name="ClassCode">CR603</option>
                <option value="CR604" id="ClassName" name="ClassCode">CR604</option>
                <option value="CR605" id="ClassName" name="ClassCode">CR605</option>
                <option value="CR606" id="ClassName" name="ClassCode">CR606</option>
                <option value="CR607" id="ClassName" name="ClassCode">CR607</option>
                <option value="CR608" id="ClassName" name="ClassCode">CR608</option>
                <option value="CR609" id="ClassName" name="ClassCode">CR609</option>
                <option value="CL601" id="ClassName" name="ClassCode">CL601</option> 
                <option value="CL602" id="ClassName" name="ClassCode">CL602</option>
                <option value="CL603" id="ClassName" name="ClassCode">CL603</option>
                <option value="TR601" id="ClassName" name="ClassCode">TR601</option>
                <option value="ARINL" id="ClassName" name="ClassCode">AI Lab</option>
                <option value="ROBOL" id="ClassName" name="ClassCode">Robotics Lab</option>
                <option value="DATCL" id="ClassName" name="ClassCode">Data Communications Lab</option>
                <option value="ADVCL" id="ClassName" name="ClassCode">Advanced Communications Lab</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
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
                