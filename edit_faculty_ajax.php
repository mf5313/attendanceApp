<?php
     require_once "conn.php";

     $id=$_POST["id"];
     $qry = "select *from faculty where f_id=$id";
$result = mysqli_query($conn, $qry);

$rec = mysqli_fetch_assoc($result);

$name=trim($rec['f_name']);
$username=trim($rec['f_uname']);
$pass=trim($rec['pwd']);
$email=trim($rec['email']);


    $output="
    
    <fieldset class='p-3'>

    <div id='showmsg'>

    </div>
    <legend>Edit Faculty</legend>
     <label for='id' class='form-label'>ID</label>
    <input type='text' class='form-control' id='id' name='id' value={$id} disabled>

    <label for='ename' class='form-label'>Name</label>
    <input type='text' class='form-control' id='ename' name='name' value={$name} required>

    <label for='eusername' class='form-label'>User Name</label>
    <input type='text' class='form-control' id='eusername' name='username' value={$username} required>

    <label for='epass' class='form-label'>Password</label>
    <input type='text' class='form-control' id='epass' name='pass' value={$pass} required>

    <label for='eemail' class='form-label'>E-mail</label>
    <input type='email' class='form-control' id='eemail' name='email' value={$email} required>

    <div class='col mt-4'>
        <button type='submit' id='esubbtn' class='btn btn-outline-primary align-content-center'>Save Changes</button>
       
    </div>

</fieldset>

    ";

    echo $output;
?>