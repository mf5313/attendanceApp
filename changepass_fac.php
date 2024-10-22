<?php

    if(trim($_POST['pass'])==trim($_POST['cpass']))
    {
        session_start();
        
        include "conn.php";
        $pass=trim($_POST['pass']);
        $id=$_SESSION['id'] ;
        $qry="update faculty set pwd='$pass' where f_id=$id";
        mysqli_query($conn,$qry);
       
        header("Location: profile_fac.php?s=1");
    }
    else{
        header("Location: profile_fac.php?err=1");
      
    }
?>