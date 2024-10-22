<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
<style>
    #logout a:hover
    {
        background-color: white;
       color: #563d7c;
        
        
    }
   
</style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light border-bottom box-shadow mb-0"  style="background-color: #563d7c;">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Attendacne Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                <ul class="navbar-nav flex-grow-1">
                    <?php
                    if($_SESSION['user']=='admin')
                    {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-light" href="student.php" target="_blank">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="faculty.php" target="_blank">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="course.php" target="_blank">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="profile.php" target="_blank">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="logout" href="logout.php" onclick="alert('Are you sure');">Logout</a>
                    </li>
                    <?php
                    }
                    elseif($_SESSION['user']=='faculty')
                    {
                    ?>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="profile_fac.php" target="_blank">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="logout" href="logout.php" onclick="alert('Are you sure');">Logout</a>
                    </li>
                    <?php
                    }
                    ?>
                    
                </ul>
              
                
            </div>
        </div>
    </nav>




    <!-- 
//javascript -->
    <!-- <script src="~/lib/jquery/dist/jquery.min.js"></script> -->
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>