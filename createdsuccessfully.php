<?php
session_start();

if (isset($_SESSION['verify'])) {
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <!-- This page used bootstrap.css for my CSS Framework -->

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VERIFICATION</title>
        <!-- the href attrubute used to apply icons from bootstrap-icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- This web utilized bootstrap.css -->
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>

    <!-- page.background.jpg has been set as background of the page -->

    <body background="./icons/page.background.jpg">

        <!-- This form has been align-items-center and justify-content-center to make it center on the screen -->
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">

            <!-- This form displays a successful text and the button will be redirect to login page -->
            <!-- the form used a shadow to have shadow, p-4 for padding, m-5 which is the margin of the form, the background color of the form set to white, i used rounded to have a curved edges -->

            <form class="shadow p-4 mb-5 bg-white rounded" style="width: 500px" action="manualverify.php" method="post">

                <!-- text-align:center used to setting the bi bi-check-circle check-circle to center-->
                <!-- bi bi-check-circle check-circle is icon from bootstrap-icons -->
                <h1 style="text-align:center"><i class="bi bi-patch-check"></i></h1>
                <h6 class="success-text" style="text-align:center">Your account has been registered, please verify your
                    account by clicking the Verify button sent to your email address!</h6> <br>


                <?php if (isset($_GET['error'])) { ?>
                    <!-- alert alert-danger, used to make the error message color into red -->
                    <div class="alert alert-danger">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <!-- alert alert-success, used to make the success message color into green -->
                    <div class="alert alert-success">
                        <?php echo $_GET['success']; ?>
                    </div>
                <?php } ?>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                    <input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                </div>



                <!-- input-group mb-3 used to set the input field have an icon and a text field -->
                <div class="input-group mb-3">
                    <!-- This line used to have user icon beside a password input-->
                    <!-- <i class="bi bi-person"> used to display an lock icon -->
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-braces"></i></span>
                    <input type="text" class="form-control" name="v_code" placeholder="Verification Code">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <!-- the button set to btn btn-dark to make it black -->
                    <button type="submit" class="btn btn-dark">Verify</button>
                </div>
            </form>
        </div>

    </body>

    </html>

    <?php
} else {
    header("Location: signupform.php");
    exit();
}
?>
