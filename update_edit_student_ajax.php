<?php

require_once "conn.php";

$id=trim($_POST['id']);
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$regno=trim($_POST['regno']);
$sem=trim($_POST['sem']);
$endate=trim($_POST['endate']);

$qry="update students set s_name='$name',email='$email',regno='$regno',semester='$sem',Enroll_Year='$endate' where s_id=$id";


mysqli_query($conn,$qry);

?>