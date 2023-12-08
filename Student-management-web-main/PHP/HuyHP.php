<?php
session_start();
require('data.php');
$MSV=$_SESSION['uid'];



    $monDaDK="SELECT * FROM dkhpcode WHERE  MASV= '$MSV' AND DADK='Có'  
                ORDER BY `dkhpcode`.`HOCKY` ASC";
    $HPDADK =mysqli_query($conn,$monDaDK);

    $i=0;
    while ($row= mysqli_fetch_assoc($HPDADK)){
        $i=$i+1;
        echo "  <table>
                <tr>
                <td class=selectedHP> <input type='radio' name='selectedHP' value='{$row['MAHP']}' onclick='Huy_HP(this.value)'></td>
                <td class=stt> $i</td>
                <td class=maHP> {$row['MAHP']}</td>
                <td class=tenHP> {$row['TENHP']}</td>
                <td class=soTC> {$row['SOTC']}</td>
                <td class=hocky> {$row['HOCKY']}</td>
                <td class=status> {$row['DADK']}</td>
                <tr>
                </table>";}
 ?>