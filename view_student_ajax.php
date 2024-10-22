<?php

require_once "conn.php";

$qry = "select *from Students";
$result = mysqli_query($conn, $qry);

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<table class="table" id="tab">
         <thead>
         

                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>E-mail</th>
                     <th>Registration Number</th>
                     <th>Semester</th>
                     <th>Enrollment Year</th>
                    <th>Edit</th>
                    <th>Delete</th>
                 </tr>
         </thead>
         ';

    while ($rec = mysqli_fetch_assoc($result)) {

        $output .= "<tbody>
                        <tr>
                            <td>{$rec["s_id"]}</td>
                            <td>{$rec["s_name"]}</td>
                            <td>{$rec["email"]}</td>
                            <td>{$rec["regno"]}</td>
                            <td>{$rec["semester"]}</td>
                            <td>{$rec["Enroll_Year"]}</td>
                            <td><button class='btn btn-primary edit-btn' data-eid='{$rec["s_id"]}'>Edit</button></td>
                            <td><button class='btn btn-danger delete-btn' data-did='{$rec["s_id"]}'>Delete</button></td>
                        </tr>
         ";
    }

    $output .= '</tbody>
        </table>
        ';
}
else{
    $output='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>There is no record!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
echo $output;
?>