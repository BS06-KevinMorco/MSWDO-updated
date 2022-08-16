<?php
include_once('database/config.php');
session_start();
$pwd_id=$_GET['pwd_id']; 
$sql = "DELETE FROM pwd_info WHERE pwd_id='" . $pwd_id . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
    header("Location: pwd-requests.php");
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>
