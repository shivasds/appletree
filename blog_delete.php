<?php
require_once("dbcon.php");
$id=$_GET['id'];
$sql = "delete from blog where id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('deleted successfully');location.href='blog-list'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
