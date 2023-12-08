<?php
session_start();

require('data.php');
$MSV=$_SESSION['uid'];

$MAHP=$_GET['q'];

$updateHP="UPDATE dkhpcode  set DADK='Không' where MASV='$MSV' AND MAHP='$MAHP'";
mysqli_query($conn, $updateHP);
?>