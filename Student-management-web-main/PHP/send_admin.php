<script src="../JS/button_admin.js"></script>
<?php
session_start();
$_SESSION['current'] = null;
require('data.php');
$page = $_POST['thuTu'];
if ($page == 0)
{
    echo "<hr>
    <h1>Chọn giá trị tăng giảm để xem thông tin các sinh viên</h1>
    <hr> ";
}
else{
$start = $page*7 - 7;
$result = mysqli_query($conn,"select MASV,HOSV,TENSV,KHOAHOC,TENKHOA from sinhvien,lop,khoa where sinhvien.MALOP=lop.MALOP and lop.MAKHOA=khoa.MAKHOA limit 7 offset ".$start);
$num = mysqli_num_rows($result);
$stt = $page*7 - 7;
if ($num>0)
{   
    $row_count = 0
    ?>
    <table class='content-table' style="width:685px;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã số sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Khóa học</th>
                <th>Chuyên ngành</th>
                <th>Tác vụ</th>
            </tr>
        </thead>
    <?php
    while($row = mysqli_fetch_array($result))
    {
        $row_count+=1;
        $stt += 1;
        $ten =$row['HOSV']." ".$row['TENSV'];
        ?>

    <tr>
    <?php
    if ($stt%7==1){
    echo "<tbody>";
    }
    ?>
    
        <td><?=$stt?></td>
        <td><?=$row['MASV']?></td>
        <td><?=$ten?></td>
        <td><?=$row['KHOAHOC']?></td>
        <td><?=$row['TENKHOA']?></td>
        <td><button class='xem' value="<?=$row['MASV']?>" >xem</button></td>  

    </tr>
<?php
    if ($num == 7){
        if ($stt%7==0){
            echo "</tbody></table>";
        }
        }
    else {
        if ($row_count==$num){
            echo "</tbody></table>";
        }
    }
}
    
}
else {
    echo "<br>
    <hr>
    <h1>Hết giá trị trong database</h1>
    <hr>";
}
}
?>