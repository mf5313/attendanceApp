<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Attendance Management System</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        body {
            background: #e9e9e9;
        }

        .container {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 5%;

        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- JS FOR bootstrap -->
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->


    <div class="container">
        <form class="login-form" action="authenticate.php" method="post">
         
            <?php
            if (isset($_GET['err']) && $_GET['err'] == 1) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Wrong!</strong> Username or password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

            }
            ?>
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="input-group">
                <label for="role">Role</label>
                <select name="type">
                    <option value="-1">--Select--</option>
                    <option value="admin">Admin</option>
                    <option value="faculty">Faculty</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary align-content-center">Login</button>
                <button type="reset" class="btn btn-outline-secondary align-content-center">Reset</button>
            </div>
        </form>
    </div>




</body>

</html>