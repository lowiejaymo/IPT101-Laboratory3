<?php
session_start();

include "db_conn.php"; // include the database script to establish a connection with the database

// check if the fields in the form are set
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

    // Checking login credentials
    if (empty($uname)) {
        header("Location: loginform.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: loginform.php?error=Password is required");
        exit();
    } else {

        $sql = "SELECT * FROM user WHERE username='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($pass, $row['password'])) {
                if ($row['is_verified'] == 0) {
                    // Account is not verified
                    header("Location: loginform.php?error=Your account is not yet verified, please check your registered email and click the Verify button.");
                    exit;
                }
                // The password is correct and the account is verified
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['Lastname'] = $row['Lastname'];
                $_SESSION['First_name'] = $row['First_name'];
                $_SESSION['Middle_name'] = $row['Middle_name'];
                $_SESSION['Email'] = $row['Email'];
                header("Location: home.php");
                exit;
            } else {
                // Incorrect password
                header("Location: loginform.php?error=Incorrect User name or Password");
                exit;
            }
        } else {
            // The user does not exist or there was an error
            header("Location: loginform.php?error=Incorrect User name or Password");
            exit;
        }
    }
} else {
    header("Location: loginform.php");
    exit();
}
?>
