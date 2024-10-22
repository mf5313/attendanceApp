<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="header">
  <h1>Attendace Management System</h1>
</div>
<div class="navbar" id="myNavbar">
        <a href="index.php">Home</a>
        <a href="addstudent.php">Student</a>
        <a href="#services">Faculty</a>
        <a href="#portfolio">Course</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php" onclick="return confirm('Are you sure')">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            &#9776;
        </a>
    </div>

    <script>
        function toggleNavbar() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }   
    </script>
    
</body>
</html>