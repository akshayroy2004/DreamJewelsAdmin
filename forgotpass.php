<?php include 'connection.php'?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpmailer/src/SMTP.php';
require 'vendor/PHPMailer/phpmailer/src/Exception.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Pssword</title>
</head>

<body>

    <?php

    if (isset($_POST["btnsub"])) {

        // echo "hello";
        $email = $_POST["mail"];
        echo $email;

        $result = mysqli_query($conn, "select * from admin where email= '$email' ") or die(mysqli_error($conn));

        $row = mysqli_num_rows($result);

        if ($row >= 1) {

            foreach ($result as $row) {

                $pass = $row['password'];
                $username = $row['username'];
            }





            $mail = new PHPMailer;
            $mail->isSMTP();
            //$mail->SMTPDebug = 1; # 0 off, 1 client, 2 client y server
            $mail->CharSet  = 'UTF-8';
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;
            $mail->Username = 'royakshay4603@gmail.com';
            $mail->Password = 'acwk tmwh twxt ghpk';
            // Sender info 
            $mail->setFrom('royakshay4603@gmail.com', 'Admin');
            $mail->addReplyTo('royakshay4603@gmail.com', 'Admin');

            // Add a recipient 
            $mail->addAddress($email);

            // Email subject 
            $mail->Subject = 'Forgot Password';

            // Set email format to HTML 
            $mail->isHTML(true);

            $mail->Body = "<h2> Login Details </h2>
                <p>Dear User,</p>
                <p>Username : $username</p>
                <p>Password : $pass</p>
                <h2>Thank You - Team WeCop - To Protect and To Serve</h2>
                ";

                echo $username;
                echo "</br>";
                echo $pass;
                // echo $mail;

            // Send email 

            if (!$mail->send()) {
                echo "mail not send";
                print_r(error_get_last());
            } else {
                echo "Mail Send";
                echo "<script>window.location='loginpage.php'</script>";
            }
            // echo $name;
        } else {
            echo "Email Id Does not Register";
        }
    }



    ?>

    <form action="" method="post">

        <div>
            <label for="">Email ID</label>
            <input type="text" id="mail" name="mail">
        </div>

        <div>
            <button type="submit" name="btnsub">Submit</button>
        </div>
    </form>

</body>

</html>