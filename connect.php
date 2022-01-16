<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$Josephite = $_POST['Josephite'];   
$S_Event = $_POST['S_Event'];
//$Id_Image = $_POST['Id_Image'];
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstname, lastname,email,phoneNumber,Josephite,S_Event) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $firstName, $lastName,  $email, $phno, $Josephite, $S_Event,);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $_SESSION['username'] = $firstName;
    header("Location: successfully.php");
    $stmt->close();
    $conn->close();
    
}

