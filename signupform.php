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
                    <input type="text" 
                        class="form-control" 
                        name="lastname" 
                        placeholder="Last Name*"
                        pattern="^[^0-9]+$"
                        title="Numbers are not allowed in this field"
                        required='required';>
                </div>
                <!-- col-md-4 used to define the column width -->
                <!-- Firstname input -->
                <div class="col-md-4">
                    <input type="text" 
                        class="form-control" 
                        name="firstname" 
                        placeholder="First Name*"
                        pattern="^[^0-9]+$"
                        title="Numbers are not allowed in this field"
                        required='required';>
                </div>
                <!-- col-md-4 used to define the column width -->
                <!-- Middlename input -->
                <div class="col-md-4">
                    <input type="text" 
                        class="form-control" 
                        name="middlename" 
                        pattern="^[^0-9]+$" 
                        title="Numbers are not allowed in this field"
                        placeholder="Middle Name">
                </div>
            </div>

            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'User Name' into bold -->
                <!-- Username input -->
                <label for="User Name" class="fw-bold">User Name</label>
                <input type="text" 
                    class="form-control" 
                    name="uname" 
                    placeholder="User Name*"
                    required='required';>
            </div>
            <!-- mb-3 used to to apply the margin border -->    
            <!-- email address input -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Email Address' into bold -->
                <label for="Email Address" class="fw-bold">Email Address</label>
                <input type="email" 
                    class="form-control" 
                    name="email" 
                    placeholder="Email Address*"
                    required='required';>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Password' into bold -->
                <!-- Password input -->
                <label for="Password" class="fw-bold">Password</label>
                <input type="password" 
                    class="form-control" 
                    name="password" 
                    placeholder="Password*"
                    required='required';>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <div class="mb-3">
                <!-- fw-bold used to make the label 'Retype Password' into bold -->
                <!-- Retype Password input -->
                <label for="Retype Password " class="fw-bold">Retype Password</label>
                <input type="password" 
                    class="form-control" 
                    name="repassword" 
                    placeholder="Retype Password"
                    required='required';>
            </div>
            <!-- mb-3 used to to apply the margin border -->
            <!-- T&C has been set to required but no T&C yet -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input"  required='required'>
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