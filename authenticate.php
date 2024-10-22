<?php
require_once "conn.php";
session_start();

$utype = $_POST["type"];
$uname = $_POST["username"];
$upwd = $_POST["pass"];


if (trim($utype) == "admin") {


    $query = "select * from admin where a_uname='$uname' AND pwd='$upwd'";
    $result = mysqli_query($conn, $query);
    $rec = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['name'] = $rec['a_name'];
        $_SESSION['id'] = $rec['a_id'];
        $_SESSION['user']='admin';
        $aid = $rec["a_id"];
        //audit trail
        $query = "insert into audit(u_id,u_role,time)values($aid,'$utype',now())";
        mysqli_query($conn, $query);
        header("Location: index.php");

    } else {
        header("Location: login.php?err=1");
    }
} else if (trim($utype) == "faculty") {
    $query = "select * from faculty where f_uname='$uname' AND pwd='$upwd'";
    $result = mysqli_query($conn, $query);
    $rec = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["name"] = $rec["f_name"];
        $_SESSION['id'] = $rec["f_id"];
        $_SESSION['user']='faculty';
        $fid = $rec["f_id"];
        //audit trail
        $query = "insert into audit(u_id,u_role,time)values($fid,'$utype',now())";
        mysqli_query($conn, $query);
        header("Location: index.php");

    } else {

        header("Location: login.php?err=1");
    }
}

?>