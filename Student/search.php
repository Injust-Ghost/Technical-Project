<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        .folder-stack {
            margin: 35px;
            height: 100px;
        }

        .folder {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90%;
            background-color: #939292;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        .folder:hover {
            background-color: cyan;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }

        .folder-text {
            text-align: center;
            color: #333;
            font-size: 28px;
        }
        a
        {
            text-decoration: none;
            color: white;
        }
        body
        {
            margin: 0px;
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
    <div class="folder-stack">

        <a href="Floors\Floor_1.html">
            <div class="folder">
                <div class="folder-text">Floor 1</div>
            </div>
        </a>
        <a href="Floors\Floor_2.html">
            <div class="folder">
                <div class="folder-text">Floor 2</div>
            </div>
        </a>
        <a href="Floors\Floor_3.html">
            <div class="folder">
                <div class="folder-text">Floor 3</div>
            </div>
        </a>
        <a href="Floors\Floor_4.html">
            <div class="folder">
                <div class="folder-text">Floor 4</div>
            </div>
        </a>
        <a href="Floors\Floor_5.html">
            <div class="folder">
                <div class="folder-text">Floor 5</div>
            </div>
        </a>
        <a href="Floors\Floor_6.html">
            <div class="folder">
                <div class="folder-text">Floor 6</div>
            </div>
        </a>
        <a href="Floors/Floor_7.html">
            <div class="folder">
                <div class="folder-text">Floor 7</div>
            </div>
        </a>
        <a href="Floors/Floor_8.html">
            <div class="folder">
                <div class="folder-text">Floor 8</div>
            </div>
        </a>
    </div>

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
