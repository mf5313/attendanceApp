<?php

    if(trim($_POST['pass'])==trim($_POST['cpass']))
    {
        session_start();
        
        include "conn.php";
        $pass=trim($_POST['pass']);
        $id=$_SESSION['id'] ;
        $qry="update admin set pwd='$pass' where a_id=$id";
        mysqli_query($conn,$qry);
       
        header("Location: profile.php?s=1");
    }
    else{
        header("Location: profile.php?err=1");
      
    }
?>