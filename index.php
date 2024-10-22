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
<div>
    <h1 class="text-info">Hello <?php echo ucfirst($_SESSION['name'])?></h1>
</div>

<?Php require_once "footer.php"?>
</body>
</html>