<?php
session_start();

if (isset($_SESSION['username']) ) {
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <!-- This web utilized bootstrap.css -->
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>

    <!-- page.background.jpg has been set as background of the page -->
    <body background="./icons/page.background.jpg">
        <div class="position-absolute top-50 start-50 translate-middle">
            <!-- Setting the text alligned to center -->
            <h1 style="text-align:center">Hello,
                <!-- Displaying the username -->
                <?php echo $_SESSION['username']; ?>!
            </h1>
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- the button set to btn btn-dark to make it black -->
                <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
        </div>
    </body>

    </html>
    </body>

    </html>

    <?php
} else {
    header("Location: loginform.php");
    exit();
}
?>