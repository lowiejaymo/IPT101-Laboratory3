<?php  
require('db_conn.php');

if(isset($_GET['email']) && isset($_GET['v_code'])){
    $email = $_GET['email'];
    $v_code = $_GET['v_code'];

    // Query to check if the provided email and verification code match
    $query = "SELECT * FROM `user` WHERE `Email` = '$email' AND `verification_code`= '$v_code'";
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result) == 1){ // if email is existing in the database
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0){ // checking if the 'is_verified' column has a value of 0, if 0 means it is not verified, if 1 then it is verified
                // Update the verification status in the database
                $update ="UPDATE user SET is_verified='1' WHERE Email = '$email'";
                if(mysqli_query($conn, $update)){ // this alert will promt when  update is successfull updated or verified the user
                    header("Location: loginform.php?success=Email verification successful.");
                    exit();
                } else{ // this alert will promt when  update is unsuccessfull updated or unverified the user
                    header("Location: loginform.php?error=Unknown error occurred.");
                    exit();
                }
            }else{// this will prompt when user attempt to verify a verified account
                header("Location: loginform.php?error=Email Address was already registered");
                exit();
            }
        }
    } else {// this will prompt when the data was not found in the database
        header("Location: loginform.php?error=Unknown error occurred.");
        exit();
    }
} else {
    // Handle case where email or verification code is not provided
    header("Location: loginform.php?error=Email or verification code is missing.");
    exit();
}
?>
