<?php
$fullName = $_POST['fullName'];
// $lastName = $_POST['lastName'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$Josephite = $_POST['Josephite'];   
$S_Event = $_POST['S_Event'];
$Id_Image = $_POST['myImage'];
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {

    if(isset($_POST['submit']) && isset($_FILES[$Id_Image])){
        echo '<pre>';
        print_r($_FILES($Id_Image));
        echo '</pre>';
        
        $stmt = $conn->prepare("insert into registration(fullname,email,phoneNumber,Josephite,S_Event,myImage) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $fullName,  $email, $phno, $Josephite, $S_Event,$Id_Image);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $_SESSION['username'] = $fullName;
        header("Location: successfully.php");
        $stmt->close();
        $conn->close();
        
    }
}

