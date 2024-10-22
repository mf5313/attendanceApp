<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">

</head>

<body>
    <?php
    session_start();
    include "logcheck.php";
    include "header.php";
    ?>

    <!-- main content statrts from here -->
    <div id="main">
        <div class="container">
            <form action="changepass_fac.php" method="post">
                <?Php
                if (isset($_GET['s']) && $_GET['s'] == 1) {
                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Successfully!</strong> Changed your password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

                } elseif (isset($_GET['err'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Mismatched!</strong> in password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                }
                ?>
                <fieldset>
                    <legend>Change Password</legend>
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" id="username" name="username"
                        value="<?= ucfirst($_SESSION['name']) ?>" disabled>


                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>

                    <label for="cpass" class="form-label">Confirm Password</label>
                    <input type="cpassword" class="form-control" id="cpass" name="cpass" required>

                    <div class="col mt-4">
                        <button type="submit" class="btn btn-outline-primary align-content-center">Change</button>
                        <button type="reset" class="btn btn-outline-secondary align-content-center">Reset</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>






    <!-- JS FOR bootstrap -->
    <script href="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <?Php require_once "footer.php" ?>
</body>

</html>