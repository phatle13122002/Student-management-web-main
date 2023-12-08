<?php
session_start();
$MSV=$_SESSION['uid'];

require("data.php");
$hk=$_GET['q'];
if ($hk==0) {
    $sql="select MASV,TENHP,HOCPHI,TTRANGHP,hocky from hocphan,lophp,dkhp where hocphan.MAHP = lophp.MAHP and lophp.MALHP=dkhp.MALHp and masv = $MSV ";
}
else {
    $sql="select MASV,TENHP,HOCPHI,TTRANGHP,hocky from hocphan,lophp,dkhp where hocphan.MAHP = lophp.MAHP and lophp.MALHP=dkhp.MALHp and masv = $MSV and hocky='$hk'";
}

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    ?>
    <table>
        <tr>
            <td class='sv'><?=$row['MASV']?></td>
            <td class='thp'><?=$row['TENHP']?></td>
            <td class='tthp'><?=$row['TTRANGHP']?></td>
            <td class='hp'><?=$row['HOCPHI']?></td> 
        <tr>
    </table>
    <?php
}                   
?>