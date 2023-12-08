<link rel="stylesheet" href="../CSS/form_style.css">
<script src="../JS/display_admin.js"></script>
<?php
session_start();
require('data.php');
$MSSV = $_POST['mssv'];
$_SESSION['current'] = $MSSV;
$detail = mysqli_query($conn,"select bomon.MABM, khoa.MAKHOA,HOSV,TENSV,PHAI,sinhvien.MALOP,NAMSINH,LHDT,KHOAHOC,TENKHOA from sinhvien,lop,khoa,bomon where sinhvien.MALOP=lop.MALOP AND BOMON.MAKHOA = KHOA.MAKHOA AND lop.MAKHOA=khoa.MAKHOA and masv=$MSSV");
if($row=mysqli_fetch_assoc($detail))
{   
    $ho =$row['HOSV'] ;
    $ten = $row['TENSV'];
    $phai = $row['PHAI'];
    $malop = $row['MALOP'];
    $ngaysinh = $row['NAMSINH'];
    $khoahoc = $row['KHOAHOC'];
    $nganh = $row['TENKHOA'];
}
?>

<div class='form-container'>
    <div class='title' align='left'>Mã số sinh viên: <?=$MSSV?></div>
<form>
    <div class='user-details'>
        <div class='input-box'>
            <span class='details'>Họ sinh viên</span>
            <input class = 'disabled ho' disabled type="text" required value='<?=$ho?>'>
        </div>
        <div class='input-box'>
            <span class='details'>Tên sinh viên</span>
            <input class = 'disabled ten' disabled type="text" required value='<?=$ten?>'>
        </div>
        <div class='input-box'>
            <span class='details'>Giới tính </span>
            <input class = 'disabled phai' disabled type="text" required value='<?=$phai?>'>
        </div>
        <div class='input-box'>
            <span class='details'>Khóa</span>
            <input class = 'disabled khoa' disabled type="text" required value='<?=$khoahoc?>'>
        </div>
        <div class='input-box'>
            <span class='details'>Chuyên ngành</span>
            <input class = 'disabled nganh' disabled type="text" required value='<?=$nganh?>'>
        </div>
        <div class='input-box'>
            <span class='details'>Lớp</span>
            <input class = 'disabled lop' disabled type="text" required value='<?=$malop?>'>
        </div></div>
        <div class="button">
            <input type='button' class='exit' value='Thoát'>
            <input type='button' value='Xóa' class='delete' >
            <input type='button' value='Sửa' class='update' >
        </div>
</form>
</div>