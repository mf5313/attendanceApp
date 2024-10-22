<?php
     require_once "conn.php";
     
     $name=trim($_POST['name']);
     $username=trim($_POST['username']);
     $pass=trim($_POST['pass']);
     $email=trim($_POST['email']);

    $qry="insert into faculty (f_name,f_uname,pwd,email)values('{$name}','{$username}','{$pass}','{$email}')";
    if(mysqli_query($conn,$qry)){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Added !</strong> Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please !</strong>Fill Unique Values
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>