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