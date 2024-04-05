<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            body
            {
                margin: 0px;
            }
            a
            {
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
        <table height="10%" width="100%" border="0" bgcolor="#050A30">
            <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
            <thead>
                <tr>
                    <th><a href="../Admin/student.php" target="_parent">ON THE GO</a></th>
                    <th><a href="../Student/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                    <th><a href="../Student/search.php" target="_parent" >Floor Search</a></th>
                    <th><a href="../Student/Contact_Us.php" target="_parent">Contact Us</a></th>
                    <th><a href="../Student/FAQ.php" target="_parent">FAQ's</a></th>
                    <th align="right" id="profile-img-container">
                        <img id="profile-img" src="../Student/Images/account.png" height="50" width="50">
                            <div id="details-box">
                                <?php
                                    include '../Admin/fetch_student_details.php';
                                ?>
                            </div>
                    </th>
                </tr>
            </thead>
        </table>
    </body>
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