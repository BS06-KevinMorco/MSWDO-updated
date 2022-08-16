<?php
include_once('database/config.php');
session_start();
$senior_id=$_GET['senior_id']; 
$sql = "DELETE FROM senior_info WHERE senior_id='" . $senior_id . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
    header("Location: senior-requests.php");
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>
