<?php
require('data.php');
if (is_numeric($_POST['masv']))
{
    $masv = $_POST['masv'];
    $sql = "select masv from sinhvien where masv = $masv";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 0)
    {
        $ho =  $_POST['ho'];
        $ten =  $_POST['ten'];
        $birth =  $_POST['birth'];
        $phai =  $_POST['phai'];
        $khoa =  $_POST['khoa'];
        $cmnd =  $_POST['cmnd'];
        $lop =  $_POST['lop'];
        $sql = "insert into sinhvien(MASV,HOSV,TENSV,CMND,PHAI,MALOP,KHOAHOC,NAMSINH) VALUES 
        ($masv,N'$ho',N'$ten','$cmnd','$phai','$lop','$khoa','$birth')";
        $Qresult = mysqli_query($conn,$sql);
        echo "<hr>Đã cập nhật thành công.<hr>";
    }
    else 
    {
        echo "<hr>Đã tồn tại mã sinh viên này.<hr>";
    }

}
else {

echo "<hr>Gửi không thành công do kiểu dữ liệu.<hr>";
}



?>