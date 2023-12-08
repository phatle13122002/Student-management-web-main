<link rel="stylesheet" href="../CSS/table_style.css">
<script src="../JS/button_admin.js"></script>
<?php
require("data.php");
$masv = $_POST['key'];
$sql = "select  hosv, tensv  from sinhvien where masv = $masv ";
$query = mysqli_query($conn,$sql);
if (mysqli_num_rows($query)==1){
    while ($row = mysqli_fetch_assoc($query))
    {   
        $tensv = $row['hosv']." ".$row['tensv'];
        ?>
        <table class='simple'>
        <tr>
            <th>Masv</th>
            <td><?=$masv?></td>
        </tr>  
        <tr>
        <th>Tên sinh viên:</th>
            <td><?=$tensv?></td>
        </tr>
        <tr>
            <th>Tác vụ</th>
            <td><button class='xem' value="<?=$masv?>" >xem</button></td>
        </tr>
    </table>

<?php

    }
}
else echo "<br>không có kết quả"

?>


