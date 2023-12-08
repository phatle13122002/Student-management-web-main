<?php
session_start();

require('data.php');
$MSV=$_SESSION['uid'];

$MAHP=$_GET['c'];

$updateHP="UPDATE dkhpcode  set DADK='Có' where MASV='$MSV'  AND MAHP='$MAHP'";
mysqli_query($conn, $updateHP);
?>