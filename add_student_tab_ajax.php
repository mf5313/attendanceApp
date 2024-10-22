<?php
echo '<div id="addform" style="background-color:smog;">

<fieldset class="p-3">
    <div id="showmsg"></div>

    <legend>Add Student</legend>

    <label for="regno" class="form-label">Registration Number</label>
    <input type="text" class="form-control" id="regno" name="regno" autocomplete="off" required>

    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>

    <label for="sem" class="form-label">Semester</label>
    <input type="text" class="form-control" id="sem" name="sem" required>

    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required>

    <label for="endate" class="form-label">Enrollment Date</label>
    <input type="date" class="form-control" id="endate" name="endate" required>

    <button type="submit" id="subbtn" class="btn btn-outline-primary align-content-center mt-2">Add</button>
    <button type="reset" class="btn btn-outline-secondary align-content-center mt-2">Reset</button>
</fieldset>

</div>';
?>