<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            body
            {
                margin: 0px;
            }
            th:not(:first-child):hover {
                background-color: #030721;
                color: #050A30;
            }
            a {
                text-decoration: none;
                color: #F1E3D2;
            }
            /* Style for the top frame */
            #top-frame {
                height: 10%;
                color: #050A30;
            }

            /* Style for the main frame */
            #main-frame {
                height: 70%;
                background-color: white;
                color: #050A30;
            }

            /* Center content in the main frame */
            #main-content {
                margin: 20px;
            }

            /* Style for accordion */
            .accordion {
                background-color: #050A30;
                color:#F1E3D2;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 18px;
                transition: 0.4s;
            }

            .accordion:hover {
                background-color: #1A237E;
            }

            .panel {
                padding: 0 18px;
                display: none;
                overflow: hidden;
                background-color: #1A237E;
                color: #F1E3D2;
                font-size: 20px;
            }

            .panel p {
                margin: 0;
                padding: 10px 0;
                font-family: 'Roboto', sans-serif;
            }
            #details-box {
            position: absolute;
            top: 60px;
            right: 50px;
            width: auto;
            height: auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            text-align: left;
            z-index: 1;
            }
            #profile-img-container {
                position: relative;
                display: inline-block;
                left: 80px;
            }
            #profile-img:hover + #details-box,
            #profile-img-container.clicked #details-box {
                opacity: 1;
            }
        </style>
    </head>
    <body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
        <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
        <thead>
            <tr>
                <th class='onthego-font'><a href="../Admin/teacher.php" target="_parent">ON THE GO</a></th>
                <th class='roboto-font'><a href="../Teacher/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                <th class='roboto-font'><a href="../Teacher/search.php" target="_parent" >Floor Search</a></th>
                <th class='roboto-font'><a href="../Teacher/Contact_Us.php" target="_parent">Contact Us</a></th>
                <th class='roboto-font'><a href="../Teacher/FAQ.php" target="_parent">FAQ's</a></th>
                <th align="right" id="profile-img-container">
                    <img id="profile-img" src="../Teacher/Images/account.png" height="50" width="50">
                        <div id="details-box">
                            <?php
                                include '../Admin/fetch_teacher_details.php';
                            ?>
                        </div>
                </th>
            </tr>
        </thead>
        </table>
        <body>

            <div id="top-frame">
                <center>  <h1>FAQ's</h1></center>
            </div>
            <div id="main-frame">
                <div id="main-content">
                    <button class="accordion">What is the purpose of this web page?</button>
                    <div class="panel">
                        <p>The application aims to help students locate classrooms within their campus easily and enable teachers to book available classrooms for scheduling lectures or activities.</p>
                    </div>
                    <button class="accordion">How does the application work?</button>
                        <div class="panel">
                            <p>The application provides a map of the campus with marked locations of classrooms. Students can search for a specific classroom or browse through the map to find their destination. Teachers can check the availability of classrooms and book them for their sessions.</p>
                    </div>

                    <button class="accordion">Is the application available on mobile devices?</button>
                    <div class="panel">
                        <p>Yes, the application is available on both Android and iOS platforms, allowing users to access it conveniently from their smartphones or tablets.</p>
                    </div>

                    <button class="accordion">How accurate is the classroom mapping feature?</button>
                    <div class="panel">
                        <p>The classroom mapping feature provides precise locations of classrooms within the campus, ensuring that students can easily navigate to their desired destinations.</p>
                    </div>

                    <button class="accordion">Can students view real-time information about classroom availability?</button>
                    <div class="panel">
                        <p>No, students cannot view real-time information about classroom availability. Only teachers or administrative staff can reserve classrooms.</p>
                    </div>

                    <button class="accordion">How secure is the booking process?</button>
                    <div class="panel">
                        <p>The booking process is secure, with authentication measures in place to ensure that only authorized users, such as teachers or administrative staff, can reserve classrooms for their sessions.</p>
                    </div>

                    <button class="accordion">Can users report issues with classrooms through the application?</button>
                    <div class="panel">
                        <p>Yes, users can report any issues with classrooms, such as maintenance issues or equipment malfunctions, through the application, allowing for timely resolution by campus authorities.</p>
                    </div>

                    <button class="accordion">Is technical support available for users encountering difficulties with the application?</button>
                    <div class="panel">
                        <p>Yes, technical support is available to assist users with any difficulties they may encounter while using the application, ensuring a smooth user experience.</p>
                    </div>
                </div>
            </div>
    </body>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
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
</html>