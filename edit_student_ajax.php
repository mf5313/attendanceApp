<?php
require_once "conn.php";

$id = $_POST["id"];
$qry = "select *from Students where s_id=$id";
$result = mysqli_query($conn, $qry);

$rec = mysqli_fetch_assoc($result);

$name = trim($rec['s_name']);
$email = trim($rec['email']);
$regno = trim($rec['regno']);
$sem = trim($rec['semester']);
$endate = trim($rec['Enroll_Year']);


$output = "

<div id='addform' style='background-color:smog;'>

    <fieldset class='p-3'>
        <div id='showmsg'></div>

        <legend>Add Student</legend>
          <label for='id' class='form-label'>ID</label>
         <input type='text' class='form-control' id='id' name='id' value={$id} disabled>

        <label for='eregno' class='form-label'>Registration Number</label>
        <input type='text' class='form-control' id='eregno' name='regno' value={$regno} required>

        <label for='ename' class='form-label'>Name</label>
        <input type='text' class='form-control' id='ename' name='name' value={$name} required>

        <label for='esem' class='form-label'>Semester</label>
        <input type='text' class='form-control' id='esem' name='sem' value={$sem} required>

        <label for='eemail' class='form-label'>E-mail</label>
        <input type='email' class='form-control' id='eemail' name='email' value={$email} required>

        <label for='eendate' class='form-label'>Enrollment Date</label>
        <input type='date' class='form-control' id='eendate' name='endate' value={$endate} required>

        <button type='submit' id='esubbtn' class='btn btn-outline-primary align-content-center mt-2'>Add</button>
        <button type='reset' class='btn btn-outline-secondary align-content-center mt-2'>Reset</button>
    </fieldset>

</div>


";

echo $output;
?>