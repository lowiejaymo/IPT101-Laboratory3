<!DOCTYPE html>
<html lang="en">

<!-- This page used bootstrap.css for my CSS Framework -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title> 
    <!-- This web utilized bootstrap.css -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<!-- Signup Form -->
<!-- page.background.jpg has been set as background of the page -->
<body background="./icons/page.background.jpg" >

    <!-- This form has been align-items-center and justify-content-center to make it center on the screen -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <!-- Signup form starts here -->
        <!-- This form accepts user's credentials, all inputs are set to required except the middlename -->
        <!-- This form will be sent to signup-be.php once submmitted -->
        <!-- the form used a shadow to have shadow, p-4 for padding, m-5 which is the margin of the form, the background color of the form set to white, i used rounded to have a curved edges -->
        <form class="shadow p-4 mb-5 bg-white rounded" style="width: 650px" action="signup-be.php" method="post">

            <h1 style="text-align:center">SIGNUP</h1>

            <!-- This error message will appear when there is error with user's input -->
            <?php if (isset($_GET['error'])) { ?>
                <!-- alert alert-danger, used to make the error message color into yellow -->
                <div class="alert alert-warning">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <!-- The full name has been divided into 3 input which is Lastname, Firstname, and Middlename, and they are aligned horizontally that used row mb-3 -->
            <div class="row mb-3 ">
                <!-- fw-bold used to make the label 'Fullname' into bold -->
                <label for="Fullname" class="fw-bold">Fullname</label>
                <!-- col-md-4 used to define the column width -->
                <!-- Lastname input -->
                
                <div class="col-md-4">
                    <?php if (isset($_GET['lname'])) { ?>
                        <input type="text" 
                               class="form-control" 
                               name="lastname" 
                               placeholder="Last Name*"
                               pattern="^[^0-9]+$" 
                               title="Numbers are not allowed in this field"
                               value="<?php echo $_GET['lname']; ?>">
                    <?php } else { ?>
                        <input type="text" 
                               class="form-control" 
                               name="lastname" 
                               placeholder="Last Name*"
                               pattern="^[^0-9]+$"
                               title="Numbers are not allowed in this field"
                               >
                    <?php } ?>
                </div>
                <!-- col-md-4 used to define the column width -->
                <!-- Firstname input -->
                <div class="col-md-4">
                    <?php if (isset($_GET['fname'])) { ?>
                        <input type="text" 
                               class="form-control" 
                               name="firstname" 
                               placeholder="First Name*"
                               pattern="^[^0-9]+$" 
                               title="Numbers are not allowed in this field"
                               value="<?php echo $_GET['fname']; ?>">
                    <?php } else { ?>
                        <input type="text" 
                               class="form-control" 
                               name="firstname" 
                               placeholder="First Name*"
                               pattern="^[^0-9]+$"
                               title="Numbers are not allowed in this field"
                               >
                    <?php } ?>
                </div>
                <!-- col-md-4 used to define the column width -->
                <!-- Middlename input -->
                <div class="col-md-4">
                    <?php if (isset($_GET['mname'])) { ?>
                        <input type="text" 
                               class="form-control" 
                               name="middlename" 
                               placeholder="Middle Name"
                               pattern="^[^0-9]+$" 
                               title="Numbers are not allowed in this field"
                               value="<?php echo $_GET['mname']; ?>">
                    <?php } else { ?>
                        <input type="text" 
                               class="form-control" 
                               name="middlename" 
                               placeholder="Middle Name*"
                               pattern="^[^0-9]+$"
                               title="Numbers are not allowed in this field"
                               >
                    <?php } ?>
                </div>
               

            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'User Name' into bold -->
                <!-- Username input -->
                <label for="User Name" class="fw-bold">User Name</label>
                <?php if (isset($_GET['uname'])) { ?>
                        <input type="text" 
                               class="form-control" 
                               name="uname" 
                               placeholder="User Name*"
                               value="<?php echo $_GET['uname']; ?>">
                    <?php } else { ?>
                        <input type="text" 
                               class="form-control" 
                               name="uname" 
                               placeholder="User Name*"
                               >
                    <?php } ?>
              
            </div>
            <!-- mb-3 used to to apply the margin border -->    
            <!-- email address input -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Email Address' into bold -->
                <label for="Email Address" class="fw-bold">Email Address</label>
                <?php if (isset($_GET['email'])) { ?>
                        <input type="email" 
                               class="form-control" 
                               name="email" 
                               placeholder="Email Address*"
                               value="<?php echo $_GET['email']; ?>">
                    <?php } else { ?>
                        <input type="email" 
                               class="form-control" 
                               name="email" 
                               placeholder="Email Address*"
                               >
                    <?php } ?>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Password' into bold -->
                <!-- Password input -->
                <label for="Password" class="fw-bold">Password</label>
                <?php if (isset($_GET['pass'])) { ?>
                        <input type="password" 
                               class="form-control" 
                               name="password" 
                               placeholder="Password*"
                               value="<?php echo $_GET['pass']; ?>">
                    <?php } else { ?>
                        <input type="password" 
                               class="form-control" 
                               name="password" 
                               placeholder="Password*"
                               >
                    <?php } ?>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Retype Password' into bold -->
                <!-- Retype Password input -->
                <label for="Retype Password " class="fw-bold">Retype Password</label>
                <?php if (isset($_GET['repass'])) { ?>
                        <input type="password" 
                               class="form-control" 
                               name="repassword" 
                               placeholder="Retype Password*"
                               value="<?php echo $_GET['repass']; ?>">
                    <?php } else { ?>
                        <input type="password" 
                               class="form-control" 
                               name="repassword" 
                               placeholder="Retype Password*"
                               >
                    <?php } ?>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <!-- T&C has been set to required but no T&C yet -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input"  name='tandc'>
                <label class="form-check-label" for="tac"  >Accept Terms and Condition</label>
            </div>
            
            <!-- This button will submit use's credentials -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- the button set to btn btn-dark to make it black -->
                <button type="submit" name="create_account"class="btn btn-dark">Create account</button>
            </div>
            <hr>

            <!-- If user has account already, they can click 'Login' to be redirect to LOGIN page  -->
            <div> Already have an account? <a href="loginform.php">Login! </div>
        </div>
    </form>
</body>
</html>
