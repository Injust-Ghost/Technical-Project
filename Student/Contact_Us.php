<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    <style>
        h2
        {
            font-family: 'Roboto', sans-serif;
            font-size: 30px;
        }
        body {
            margin: 0px;
            background-color:white;
        }
        .contact {
            width: 700px;
            margin: 0 auto;
            box-shadow:0 0 10px rgba(106, 117, 200, 0.9); 
            padding: 20px; 
            border-radius: 20px;
            background-color:white;
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
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .form {
            background-color: #050A30;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form:hover {
            background-color: #030721;
        }
        th:not(:first-child):hover {
            background-color: #030721;
            color: #050A30;
        }
        a {
            text-decoration: none;
            color: #F1E3D2;
        }
    </style>
</head>
<body>
    <table height="10%" width="100%" border="0" bgcolor="#050A30">
        <col width="300"><col width="150"><col width="150"><col width="150"><col width="150"><col width="100">
        <thead>
            <tr>
                <th class='onthego-font'><a href="../Admin/student.php" target="_parent">ON THE GO</a></th>
                <th class='roboto-font'><a href="../Student/NewMasterCal.php" target="_parent">Master Calendar</a></th>
                <th class='roboto-font'><a href="../Student/search.php" target="_parent" >Floor Search</a></th>
                <th class='roboto-font'><a href="../Student/Contact_Us.php" target="_parent">Contact Us</a></th>
                <th class='roboto-font'><a href="../Student/FAQ.php" target="_parent">FAQ's</a></th>
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

    <div class='container'>
        <form class="contact" action="Contact_Us.php" method="post">
        <h2>Contact Us</h2>
        
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
    </div>

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
            echo "<script>alert('Your message has been recorded. Will respond as quickly as we could. Thank you !!');</script>";
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
        
        if ($mail->send()) {
            echo "<script>alert('Your message has been sent. Thank you!');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
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
