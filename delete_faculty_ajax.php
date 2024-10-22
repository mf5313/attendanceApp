<?PHP

require_once "conn.php";
$id=$_POST['id'];
$qry="delete from faculty where f_id=$id";

mysqli_query($conn,$qry);
?>