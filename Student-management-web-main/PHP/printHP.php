<?php
session_start();
require('data.php');
$MSV=$_SESSION['username'];
$idHP=$_SESSION['soHK'];


    $monDaDK="SELECT * FROM dkhpcode WHERE  MASV= '20001' AND DADK='Có'  
                ORDER BY `dkhpcode`.`HOCKY` ASC";
    $HPDADK =mysqli_query($conn,$monDaDK);

    $i=0;
    while ($row= mysqli_fetch_assoc($HPDADK)){
        $i=$i+1;
        echo "  <table>
                <tr>
                <td class=stt> $i</td>
                <td class=maHP> {$row['MAHP']}</td>
                <td class=tenHP> {$row['TENHP']}</td>
                <td class=soTC> {$row['SOTC']}</td>
                <td class=hocky> {$row['HOCKY']}</td>
                <td class=status> {$row['DADK']}</td>
                <tr>
                </table>";}
 ?>
