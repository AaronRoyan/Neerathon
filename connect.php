<?php
$fullName = $_POST['fullName'];
// $lastName = $_POST['lastName'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$Josephite = $_POST['Josephite'];   
$S_Event = $_POST['S_Event'];
$Id_Image = $_POST['myImage'];
$conn = new mysqli('localhost', 'root', '', 'test');
$id = rand(1,10000);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {

    if(isset($_POST['submit'])){
        echo '<pre>';
        //print_r($_FILES($Id_Image));
        echo '</pre>';
        
        $stmt = $conn->prepare("insert into registration(fullname,email,phoneNumber,Josephite,S_Event,myImage,id) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $fullName,  $email, $phno, $Josephite, $S_Event, $Id_Image,$id);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'aaron.jd.royan@gmail.com';                     //SMTP username
            $mail->Password   = 'googlealwayswins';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('aaron.jd.royan@gmail.com', 'Mailer');
            $mail->addAddress($email);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Neerathon Registration Successfull';
            $mail->Body    = '$fullName, You have successfully registered for <b>Neerathon/b> in the $S_Event Km Marathon Event.<br> 
                              Your partcipant id is NA-$id
                              <h3 style="margin-left: 50px"><b>Use This Mail for entry of event</b></h3>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $_SESSION['username'] = $fullName;
        header("Location: successfully.php");
        $stmt->close();
        $conn->close();
        
    }
}

