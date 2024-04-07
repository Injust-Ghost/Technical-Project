<html>
    <head>
        <link rel="stylesheet" href="floor.css">
    </head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
            <col width="300"><col width="150"><col width="150"><col width="150"><col width="100"><col width="100"><col width="100">
            <thead>
                <tr>
                    <th class="onthego-font"><a href="../../Admin/teacher.php" target="_parent">ON THE GO</a></th>
                    <th class="roboto-font"><a href="../../Teacher/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                    <th class="roboto-font"><a href="../../Teacher/search.php" target="_parent" >Floor Search</a></th>
                    <th class='roboto-font'><a href="../search.php" target="_parent" >Booking</a></th>  
                    <th class="roboto-font"><a href="../../Teacher/Contact_Us.php" target="_parent">Contact Us</a></th>
                    <th class="roboto-font"><a href="../FAQ.php" target="_parent">FAQ's</a></th>
                    <th align="right" id="profile-img-container">
                        <img id="profile-img" src="../../Teacher/Images/account.png" height="50" width="50">
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
                <option value="CR701" id="ClassName" name="ClassCode">CR701</option>
                <option value="CR702" id="ClassName" name="ClassCode">CR702</option>
                <option value="CR703" id="ClassName" name="ClassCode">CR703</option>
                <option value="CR704" id="ClassName" name="ClassCode">CR704</option>
                <option value="CL701" id="ClassName" name="ClassCode">CL701</option>
                <option value="CL702" id="ClassName" name="ClassCode">CL702</option> 
                <option value="CL703" id="ClassName" name="ClassCode">CL703</option>
                <option value="CL704" id="ClassName" name="ClassCode">CL704</option>
                <option value="CL705" id="ClassName" name="ClassCode">CL705</option>
                <option value="CL706" id="ClassName" name="ClassCode">CL706</option>
                <option value="CC701" id="ClassName" name="ClassCode">CC701</option>
                <option value="CC702" id="ClassName" name="ClassCode">CC702</option>
                <option value="LIBRY" id="ClassName" name="ClassCode">Library</option>
                <option value="ARVRL" id="ClassName" name="ClassCode">AR/VR Lab</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
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
                