<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    <style>
        body {
            margin: 0px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .form {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form:hover {
            background-color: #45a049;
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

    <h2>&nbsp;&nbsp;&nbsp;Contact Us</h2>

    <form action="Contact_Us.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit" class="form" name="submit">Submit</button>
    </form>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    if(isset($_POST['submit'])){
        $db_host = "localhost";
        $db_name = "project";
        $db_user = "neel";
        $db_password = "tech@123";

        $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $timestamp = date('Y-m-d H:i:s');

        $sql = "INSERT INTO form_submissions (name, email, subject, message, timestamp) 
                VALUES ('$name', '$email', '$subject', '$message', '$timestamp')";

        if (mysqli_query($conn, $sql)) {
            echo "<p>Your message has been sent. Thank you!</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'onthegomapping@gmail.com';
        $mail->Password = 'kzhizxebhqjjowve';

        $mail->setFrom($email, $name);
        $mail->addAddress('onthegomapping@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        
        if($mail->send()) {
            echo "<script>alert('Message was sent successfully!');</script>";
        } else {
            echo "<script>alert('Message sending failed: " . $mail->ErrorInfo . "');</script>";
        }

        mysqli_close($conn);
    }
?>

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
