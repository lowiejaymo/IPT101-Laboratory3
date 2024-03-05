<!DOCTYPE html>
<html lang="en">

<!-- This page used bootstrap.css for my CSS Framework -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- the href attrubute used to apply icons from bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <!-- This web utilized bootstrap.css -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<!-- Signup Form -->
<!-- page.background.jpg has been set as background of the page -->
<body background="./icons/page.background.jpg">

    <!-- This form has been align-items-center and justify-content-center to make it center on the screen -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">

        <!-- Login form starts here -->
        <!-- This form accepts user's credentials -->
        <!-- This form will be sent to login-be.php once submmitted -->
        <!-- the form used a shadow to have shadow, p-4 for padding, m-5 which is the margin of the form, 
        the background color of the form set to white, i used rounded to have a curved edges -->
        <form class="shadow p-4 mb-5 bg-white rounded" style="width: 500px" action="login-be.php" method="post">

            <!-- text-align:center to set the text centered -->
            <h1 style="text-align:center">LOGIN</h1>

            <!-- This error message will appear when there is error with user's input -->
            <?php if (isset($_GET['error'])) { ?>
                <!-- alert alert-danger, used to make the error message color into red -->
                <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <!-- alert alert-danger, used to make the error message color into red -->
                <div class="alert alert-success">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
            
            <!-- input-group mb-3 used to set the input field have an icon and a text field -->
            <div class="input-group mb-3">
                 <!-- This line used to have user icon beside a username input-->
                 <!-- <i class="bi bi-person"> used to display an person icon -->
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></i></span>
                <input type="text" 
                       class="form-control" 
                       name="uname" 
                       placeholder="Username" >
            </div>

            <!-- input-group mb-3 used to set the input field have an icon and a text field -->
            <div class="input-group mb-3">
                <!-- This line used to have user icon beside a password input-->
                <!-- <i class="bi bi-person"> used to display an lock icon -->
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span> 
                <input type="password" 
                       class="form-control" 
                       name="password" 
                       placeholder="Password" >
            </div>

            <!-- This button will submit use's credentials -->
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- the button set to btn btn-dark to make it black -->
                <button type="submit" class="btn btn-dark">Login</button>
            </div>
            <hr>

            <!-- If user has no account yet, they can click 'Create an Account' to be redirect to SIGNUP page  -->
            <div>
                Don't have an account? <a href="signupform.php">Create an Account</ 
            </div>

        </form>
    </div>

</body>


</html>