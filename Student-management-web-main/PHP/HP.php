<?php
session_start();
require('data.php');
$MSV=$_SESSION['uid'];

// // Create connection
$idHP=$_GET["q"];
$_SESSION['soHK'] = $idHP;
    $truyvanHP="SELECT * FROM dkhpcode WHERE MASV=$MSV AND HOCKY=$idHP AND DADK='Không'";
    $HP =mysqli_query($conn,$truyvanHP);

$i=0;
while ($row= mysqli_fetch_assoc($HP)){
        $i=$i+1;
        echo "  <table>
                <tr>
                <td class=selectedHP><input type='radio' name='selectedHP' value='{$row['MAHP']}' onclick='selectedHP(this.value)'></td>
                <td class=stt> $i</td>
                <td class=maHP> {$row['MAHP']}</td>
                
                <td class=tenHP> {$row['TENHP']}</td>
                <td class=soTC> {$row['SOTC']}</td>
                <td class=hocky> {$row['HOCKY']}</td>
                <td class=status> {$row['DADK']}</td>           
                <tr>
                </table>";}

        // echo " <button id='buttonDK' name='DangKy' value='' onclick=printHP(this.value) >Đăng Ký</button>";



                // <input  id='buttonDK' type='submit' class='DKHP' 
                // name='DangKy' value='' onclick=printHP(this.value) style='display:none'>";
       

?>