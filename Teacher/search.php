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
            background-color: #050A30;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            transform: scale(1.03);
        }
        .folder:hover .folder-text {
            color: white;
        }

        .folder-text {
            text-align: center;
            color: #333;
            font-size: 28px;
        }
        th:not(:first-child):hover {
            background-color: #030721;
            color: #050A30;
        }
        a {
            text-decoration: none;
            color: #F1E3D2;
        }
        body
        {
            margin: 0px;
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
<col width="300"><col width="150"><col width="150"><col width="150"><col width="100"><col width="100"><col width="100">
        <thead>
            <tr>
                <th class='onthego-font'><a href="../Admin/teacher.php" target="_parent">ON THE GO</a></th>
                <th class='roboto-font'><a href="../Teacher/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                <th class='roboto-font'><a href="../Teacher/search.php" target="_parent" >Floor Search</a></th>
                <th class='roboto-font'><a href="../book/search.php" target="_parent" >Booking</a></th>                
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
    <div class="folder-stack">

        <a href="Floors\Floor_1.php">
            <div class="folder">
                <div class="folder-text">Floor 1</div>
            </div>
        </a>
        <a href="Floors\Floor_2.php">
            <div class="folder">
                <div class="folder-text">Floor 2</div>
            </div>
        </a>
        <a href="Floors\Floor_3.php">
            <div class="folder">
                <div class="folder-text">Floor 3</div>
            </div>
        </a>
        <a href="Floors\Floor_4.php">
            <div class="folder">
                <div class="folder-text">Floor 4</div>
            </div>
        </a>
        <a href="Floors\Floor_5.php">
            <div class="folder">
                <div class="folder-text">Floor 5</div>
            </div>
        </a>
        <a href="Floors\Floor_6.php">
            <div class="folder">
                <div class="folder-text">Floor 6</div>
            </div>
        </a>
        <a href="Floors/Floor_7.php">
            <div class="folder">
                <div class="folder-text">Floor 7</div>
            </div>
        </a>
        <a href="Floors/Floor_8.php">
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
