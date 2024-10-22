<?php
    require_once "conn.php";

    $id=trim($_POST['id']);
    $name=trim($_POST['name']);
    $username=trim($_POST['username']);
    $pass=trim($_POST['pass']);
    $email=trim($_POST['email']);

    $qry="update faculty set f_name='$name',f_uname=' $username',pwd='$pass',email='$email' where f_id=$id";


    mysqli_query($conn,$qry);
   

?>