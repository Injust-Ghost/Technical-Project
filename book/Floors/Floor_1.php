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

            if (time && day && subjectName && faculty && course && semester && specialization && division && batch && venue) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "check_availability.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            if (xhr.responseText.trim() === "available") {
                                var confirmBooking = confirm("Class is available. Do you want to book it?");
                                if (confirmBooking) {
                                    bookClass( time,day,subjectName,faculty,course,semester,specialization,division,batch,venueId);
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
                var params = "&time=" + encodeURIComponent(time) + "&day=" + encodeURIComponent(day) + "&subjectName=" + encodeURIComponent(subjectName)+"&faculty=" + encodeURIComponent(faculty)+ "&course=" + encodeURIComponent(course)+ "&semester=" + encodeURIComponent(semester)+ "&specialization=" + encodeURIComponent(specialization) + "&division=" + encodeURIComponent(division)+ "&batch=" + encodeURIComponent(batch) +"venue_id=" + encodeURIComponent(venueId);
                xhr.send(params);
            } else {
                alert("Please enter all details.");
            }
        }
        function bookClass(time,day,subjectName,faculty,course,semester,specialization,division,batch,venueId) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "book_class.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                }
            };
            xhr.send("time=" + time + "&day=" + day + "&subject_name=" + subjectName+ "&faculty=" + faculty + "&course=" + course + "&semester=" + semester + "&specialization=" + specialization + "&division=" + division + "&batch=" + batch +"venue_id=" + venueId +);
        }
        function assignClickEventToTDs() {
            var tds = document.querySelectorAll('td');
            tds.forEach(function(td) {
                td.onclick = function() {
                    checkAvailability(this.id);
                };
            });
        }

        document.addEventListener('DOMContentLoaded'), function() {
            assignClickEventToTDs();
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
                <option value="CR101" id="ClassName" name="ClassCode">CR101</option>
                <option value="CR102" id="ClassName" name="ClassCode">CR102</option>
                <option value="CR103" id="ClassName" name="ClassCode">CR103</option>
                <option value="CR104" id="ClassName" name="ClassCode">CR104</option>
                <option value="CR105" id="ClassName" name="ClassCode">CR105</option>
                <option value="CR106" id="ClassName" name="ClassCode">CR106</option>
                <option value="CR107" id="ClassName" name="ClassCode">CR107</option>
                <option value="CR108" id="ClassName" name="ClassCode">CR108</option>
                <option value="TR101" id="ClassName" name="ClassCode">TR101</option>
                <option value="CL101" id="ClassName" name="ClassCode">CL101</option>
                <option value="CL102" id="ClassName" name="ClassCode">CL102</option>
                <option value="DEANO" id="ClassName" name="ClassCode">Dean's Office</option>
                <option value="HRDL1" id="ClassName" name="ClassCode">Hardware Lab 1</option>
                <option value="HRDL2" id="ClassName" name="ClassCode">Hardware Lab 2</option>
                <option value="HRDL3" id="ClassName" name="ClassCode">Hardware Lab 3</option>
            </select>
        <button type="button" onclick="myfunction()">Find Class</button>
        </form>
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
                                    <td height="90" id="CR103" onclick="checkAvailability(this.id)">CR 103</td>
                                </tr>
                                <tr>
                                    <td height="90" id="CR102">CR 102</td>
                                </tr>
                                <tr>
                                    <td height="90" id="TR101">TR 101</td>
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
                