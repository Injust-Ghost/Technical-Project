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