<?php
session_start();
include "db_conn.php";

session_start();
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: indexAdminLogin.php?error=UserName Required");
        exit();
    } elseif (empty($pass)) {
        header("Location: indexAdminLogin.php?error=Password Required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE userName='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['userName'] === $uname && $row['password'] === $pass) {
                echo "Logged in";
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: Welcome.php");
                exit();
            }
        } else {
            header("Location: indexAdminLogin.php?error=Incorrect UserName or Password");
            exit();
        }
    }
} else {
    header("Location: indexAdminLogin.php");
    exit();
}
