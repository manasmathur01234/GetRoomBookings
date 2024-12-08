<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include ('/xampp/htdocs/Getroombookings/dbconnect.php');
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpassword'];

    $sql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        if (password_verify($pass, $row['Password'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['Email'] = $email;
            echo "logged in ".$email;
        }
        header("location: index.php");
    }
    header("location: index.php");
}

?>