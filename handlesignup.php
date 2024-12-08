<?php 
$showError = "false";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include ('/xampp/htdocs/Getroombookings/dbconnect.php');
    $property = $_POST['property'];
    $hotel = $_POST['hotel'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM `users` WHERE email = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numrows = mysqli_num_rows($result);
    echo $numrows;
    if ($numrows>0) {
        // echo "Error";
        $showError = "Email already in use";
    }
    else {
        if ($user_password == $user_cpassword) {
            $hash = password_hash($user_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`Property_name`, `Full_name`, `Phone_number`, `Email`, `Password`,`City`) VALUES ('$property', '$fullname', '$phone', '$user_email', '$hash','$city')";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                $showAlert = true;
                header("Location: /getroombookings/index.php?signupsuccess=true");
                exit();
            }
            else {
                // $showError = "There is an error";
                echo "Error";
            }
        }
        else {
            $showError = "Passwords not match";
        }
    }
    // $er = mysqli_error($conn);
    header("Location: /getroombookings/index.php?signupsuccess=false&error=$showError");
}

?>