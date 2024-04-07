<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
        table
        {
            text-align: center;
        }
        h1 {
        color: #050A30;
        }
        body {
            text-align:center;
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
            left: 40px;
        }
        #profile-img:hover + #details-box,
        #profile-img-container.clicked #details-box {
            opacity: 1;
        }
        .calendar-container {
            width: 50%;
            float: left;
            margin: 10px;
        }

        .dates-table {
            width: 40%;
            float: right;
            margin:5px;
        } 
        </style>
        <script>
            function mouseover() {
                document.getElementById("gfg").style.color = "red";
            }
             
            function mouseout() {
                document.getElementById("gfg").style.color = "green";
            }
        </script>
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
        <h1 align="middle">MASTER CALENDAR</h1>
        <table class='calendar-container' border="0">
        <tbody>
                <tr>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">December</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td style="color: rgb(155, 154, 154);">26</td>
                                    <td style="color: rgb(155, 154, 154);">27</td>
                                    <td style="color: rgb(155, 154, 154);">28</td>
                                    <td style="color: rgb(155, 154, 154);">29</td>
                                    <td style="color: rgb(155, 154, 154);">30</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr height="40">
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                </tr>
                                <tr height="40">
                                    <td>10</td>
                                    <td style="background-color: yellow;">11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                </tr>
                                <tr height="40">
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                </tr>
                                <tr height="40">
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">January</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td style="color: rgb(155, 154, 154);">31</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr height="40">
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                </tr>
                                <tr height="40">
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                </tr>
                                <tr height="40">
                                    <td>21</td>
                                    <td style="background-color: yellow;">22</td>
                                    <td style="background-color: yellow;">23</td>
                                    <td style="background-color: yellow;">24</td>
                                    <td style="background-color: yellow;">25</td>
                                    <td style="background-color: yellow;">26</td>
                                    <td style="background-color: yellow;">27</td>
                                </tr>
                                <tr height="40">
                                    <td style="background-color: yellow;">28</td>
                                    <td style="background-color: yellow;">29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td style="color: rgb(155, 154, 154);">1</td>
                                    <td style="color: rgb(155, 154, 154);">2</td>
                                    <td style="color: rgb(155, 154, 154);">3</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">February</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td style="color: rgb(155, 154, 154);">28</td>
                                    <td style="color: rgb(155, 154, 154);">29</td>
                                    <td style="color: rgb(155, 154, 154);">30</td>
                                    <td style="color: rgb(155, 154, 154);">31</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr height="40">
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                </tr>
                                <tr height="40">
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                </tr>
                                <tr height="40">
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                </tr>
                                <tr height="40">
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td style="color: rgb(155, 154, 154);">1</td>
                                    <td style="color: rgb(155, 154, 154);">2</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">March</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td style="color: rgb(155, 154, 154);">25</td>
                                    <td style="color: rgb(155, 154, 154);">26</td>
                                    <td style="color: rgb(155, 154, 154);">27</td>
                                    <td style="color: rgb(155, 154, 154);">28</td>
                                    <td style="color: rgb(155, 154, 154);">29</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr height="40">
                                    <td>3</td>
                                    <td style="background-color: yellow;">4</td>
                                    <td style="background-color: yellow;">5</td>
                                    <td style="background-color: yellow;">6</td>
                                    <td style="background-color: yellow;">7</td>
                                    <td style="background-color: yellow;">8</td>
                                    <td style="background-color: yellow;">9</td>
                                </tr>
                                <tr height="40">
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                </tr>
                                <tr height="40">
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                </tr>
                                <tr height="40">
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">April</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td style="color: rgb(155, 154, 154)">31</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                <tr height="40">
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                </tr>
                                <tr height="40">
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td style="background-color: yellow;"><a href="#"
                                        onMouseOver="this.style.color='red'"
                                        onMouseOut="this.style.color='green'">
                                        17</a></td>
                                    <td style="background-color: yellow;">18</td>
                                    <td style="background-color: yellow;">19</td>
                                    <td style="background-color: yellow;">20</td>
                                </tr>
                                <tr height="40">
                                    <td style="background-color: yellow;">21</td>
                                    <td style="background-color: yellow;">22</td>
                                    <td style="background-color: yellow;">23</td>
                                    <td style="background-color: yellow;">24</td>
                                    <td style="background-color: yellow;">25</td>
                                    <td style="background-color: yellow;">26</td>
                                    <td style="background-color: yellow;">27</td>
                                </tr>
                                <tr height="40">
                                    <td style="background-color: yellow;">28</td>
                                    <td style="background-color: yellow;">29</td>
                                    <td style="background-color: yellow;">30</td>
                                    <td style="color: rgb(155, 154, 154); background-color: yellow;">1</td>
                                    <td style="color: rgb(155, 154, 154); background-color: yellow;">2</td>
                                    <td style="color: rgb(155, 154, 154); background-color: yellow;">3</td>
                                    <td style="color: rgb(155, 154, 154);"">4</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width='50%'>
                        <table width="100%" border="1">
                            <thead>
                                <h2 align="center">May</h2>
                            </thead>
                            <tbody>
                                <tr height="40">
                                    <td>Sunday</td>
                                    <td>Monday</td>
                                    <td>Tuesday</td>
                                    <td>Wednesday</td>
                                    <td>Thursday</td>
                                    <td>Friday</td>
                                    <td>Saturday</td>
                                </tr>
                                <tr height="40">
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                </tr>
                                <tr height="40">
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                </tr>
                                <tr height="40">
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                </tr>
                                <tr height="40">
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                    <td></td>
                                </tr>
                                <tr height="40">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>            
        </table>
        <table class="dates-table" border='1'>
            <br><br><br>
            <thead>
                <th align='center' colspan = '2'> Academic Calendar</th>
            </thead>
            <tr>
                <td>11th December</td>
                <td>Program Start Date</td>
            </tr>
            <tr>
                <td>25th January</td>
                <td>1st Attendace Report</td>
            </tr>
            <tr>
                <td>22nd January - 29th January</td>
                <td>Mid Term Test 1</td>
            </tr>
            <tr>
                <td>25th February</td>
                <td>2nd Defaulter Report</td>
            </tr>
            <tr>
                <td>4th March - 9th March</td>
                <td>Mid Term test 2</td>
            </tr>
            <tr>
                <td>25th March</td>
                <td>3rd Defaulter Report</td>
            </tr>
            <tr>
                <td>1st April</td>
                <td>Defaulter notice A and B</td>
            </tr>
            <tr>
                <td>10th April</td>
                <td>Final Defaulter</td>
            </tr>
            <tr>
                <td>13th Arpil</td>
                <td>Program End Date</td>
            </tr>
            <tr>
                <td>17th April - 3rd May</td>
                <td>Term End Exam</td>
            </tr>
            <tr>
                <td>5th February 17th February</td>
                <td>Re Exam Term - 1</td>
            </tr>
            <tr>
                <td>25th June - 5th July</td>
                <td>Re Exam Term - 2</td>
            </tr>
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