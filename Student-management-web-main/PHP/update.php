<?php
require('data.php');
session_start();
if ($_POST['action'] == 'update' )
{
$masv = $_SESSION['current'];
$ho = $_POST['ho'];
$ten = $_POST['ten'];
$malop =  $_POST['lop'];
$gioitinh = $_POST['phai'] ;
$khoahoc = $_POST['khoa'];
$sql = "UPDATE sinhvien
SET hosv = '$ho', tensv = '$ten', phai= '$gioitinh', khoahoc = '$khoahoc',
 malop = $malop
WHERE masv=$masv";
$query = mysqli_query($conn,$sql);

}
else if ($_POST['action'] == 'delete')
{   
    $masv = $_SESSION['current'];
    $sql = "DELETE from users where masv = $masv";
    $query = mysqli_query($conn,$sql);

    $sql = "DELETE from dkhp where masv = $masv";
    $query = mysqli_query($conn,$sql);

    $sql = "DELETE from hocbong where masv = $masv";
    $query = mysqli_query($conn,$sql);

    $sql = "DELETE from sinhvien where masv = $masv";
    $query = mysqli_query($conn,$sql);


} 

?>