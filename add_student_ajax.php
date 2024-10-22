<?PHP
    require_once "conn.php";
     
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $regno=trim($_POST['regno']);
    $sem=trim($_POST['sem']);
    $endate=trim($_POST['endate']);
    $qry="insert into Students (s_name,email,regno,semester,Enroll_Year)values('{$name}','{$email}','{$regno}','{$sem}','{$endate}')";
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