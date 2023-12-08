<?php 
session_start();
require('data.php');
if ($_SESSION['login']==false){
    header('location:index.php');
}

$masv = $_SESSION['uid'];
$sql = "select diemtbhe10,malhp from dkhp where masv = $masv";
$result = mysqli_query($conn,$sql);
$data_array = [];
$Diemtb = [];
$label = [];
while ($row=mysqli_fetch_row($result))
{
    array_push($data_array,$row[0]);
    $query = mysqli_query($conn,"select tenhp,round(AVG(diemtbhe10),1) as TB from hocphan,lophp,dkhp where dkhp.MALHP=".$row[1]." and hocphan.MAHP=lophp.MAHP and lophp.MALHP=dkhp.MALHP GROUP BY tenhp");
    $numrow = mysqli_num_rows($query);
    if ($numrow>0)
    {
        while($line = mysqli_fetch_assoc($query))
        {
            array_push($label,$line['tenhp']);
            array_push($Diemtb,$line['TB']);
        }
    }

}


$detail = mysqli_query($conn,"select bomon.MABM, khoa.MAKHOA,HOSV,TENSV,PHAI,sinhvien.MALOP,NAMSINH,LHDT,KHOAHOC,TENKHOA from sinhvien,lop,khoa,bomon where sinhvien.MALOP=lop.MALOP AND BOMON.MAKHOA = KHOA.MAKHOA AND lop.MAKHOA=khoa.MAKHOA and masv=$masv");
if($row=mysqli_fetch_assoc($detail))
{   
    $hoten =$row['HOSV'] .' '.$row['TENSV'];
    $phai = $row['PHAI'];
    $malop = $row['MALOP'];
    $ngaysinh = $row['NAMSINH'];
    $loaihinh = $row['LHDT'];
    $khoahoc = $row['KHOAHOC'];
    $nganh = $row['TENKHOA'];
    $makhoa = $row['MAKHOA'];
    $mabm = $row['MABM'];
}

$TongTc_Kq = mysqli_query($conn,"SELECT SUM(SOTC) AS TONGTC FROM BOMON, HOCPHAN WHERE MABM=$mabm");
if ($row=mysqli_fetch_assoc($TongTc_Kq)){
    $tongtc = $row['TONGTC'];
}

$acq_tc_kq = mysqli_query($conn,"select sum(sotc) as TCNHAN from
(select DISTINCT lophp.malhp,SOTC,MASV  from hocphan,dkhp,lophp where hocphan.MAHP = lophp.MAHP and lophp.MALHP and dkhp.MALHP and MASV=$masv AND DIEMTBHE10>=4) as temp1");
if ($row=mysqli_fetch_assoc($acq_tc_kq)){
    $sotcnhan = $row['TCNHAN'];
}
$NhanPTong =[];
$thieu = $tongtc-$sotcnhan;
if ($thieu<0){
    $thieu = $tongtc;
}


array_push($NhanPTong,$thieu);
array_push($NhanPTong,$sotcnhan);
$hocphan=mysqli_query($conn,"SELECT DISTINCT TENHP,hocphan.MAHP AS MAHP FROM hocphan,lophp,dkhp WHERE dkhp.MALHP=lophp.MALHP and hocphan.MAHP=lophp.mahp and dkhp.MASV=$masv ")



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Web tra cứu thông tin học sinh</title>
    <link rel='stylesheet' type='text/css' href="../CSS/home_style.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header>
        <img class='logo' src="../images/logo.png" height='50' width="50" alt="">
            <nav>
                <ul class="nav_links">
                    <li><a href='#'>Trang chủ</a></li>
                    <li><a href='#'>Chi tiết</a></li>
                    <li><a href='#'>Giới thiệu</a></li>
                    <li><a href='#'><?=$hoten?></a></li>
                </ul>
            </nav>
            <a class="ctn" href="#"><button onclick="window.location.href='logout.php';">Logout</button></a>
        </header>
    <div class="container">
        <div class="maincontent">
            <div class="student_details">
                <strong>Thông tin sinh viên</strong>
                <hr />
                <div class= 'student'>
   
                    <img src='../images/student_images/student1.jpg' width="150" height="150"/><br>
                    <a href="#">Xem chi tiết</a>
                </div>
                <table>
                    <tr>
                        <td>MSSV:<strong><?=$masv?></strong></td>
                        <td>Lớp học:<strong><?=$malop?></strong></td>
                    </tr>
                    <tr>
                        <td>Họ tên:<strong><?=$hoten?></strong></td>
                        <td>Khóa học:<strong><?=$khoahoc?></strong></td>
                    </tr>
                    <tr>
                        <td>Giới tính:<strong><?=$phai?></strong></td>
                        <td>Bậc đào tạo:<strong>bậc đào tạo</strong></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh:<strong><?=$ngaysinh?></strong></td>
                        <td>Loại hình đào tạo:<strong><?=$loaihinh?></strong></td>
                    </tr>
                    <tr>
                        <td>Nơi sinh:<strong>Database ko co</strong></td>
                        <td>Ngành:<strong><?=$nganh?></strong></td>
                    </tr>
                </table>
            </div>
            <div class="announcement">
                <div class="note">
                    Nhắc nhở mới chưa xem
                    <h3>X (Số lần nhắc nhở chưa xem)</h3>
                    <a href="#">Xem chi tiết</a>
                </div>
                <div class="courses">
                    Lịch học trong tuần
                    <h3>X (Số lần nhắc nhở chưa xem)</h3>
                    Xem chi tiết
                </div>
                <div class="exam">
                    Lịch thi trong tuần
                    <h3>X (Số lần nhắc nhở chưa xem)</h3>
                    Xem chi tiết
                </div>
            </div>
        </div>
        <div class="menu">
            <ul >
                <li><a href="#">Trang chủ</a></li>
                <li><a href="congno.php">Công nợ</a></li>
                <li><a href="dkhp.php">Đăng kí học phần</a></li>
                <li><a href="thongke.php">Thống kê</a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        
        <div class='chart_container'>
           
            <canvas id="myChart"> </canvas>
        </div>
        <div class="tinchi">
            <canvas id="piechart" > </canvas>
        </div>
        <div class="subject">
            <?php
            $num = mysqli_num_rows($hocphan);
            if ($num>0){
                echo "<div class = 'hocphan'>";
                echo "<hr>";
                while ($row=mysqli_fetch_assoc($hocphan)){
                    echo "<a href='#'>".$row['TENHP']."</a><br>";
                    echo $row['MAHP'];
                    echo "<br>";
                    echo "<hr>";
                }
                echo "</div>";
            }
            ?>

        </div>

        
        
    </div>
    <footer>
            Copyright © 2021 Trường Đại học Nguyễn Tất Thành - Phòng Quản lý Đào tạo
            Địa chỉ: Văn phòng tại Quận 4: số 300A đường Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
            Văn phòng tại Quận 12: số 331, quốc lộ 1A, phường An Phú Đông, quận 12, TP. HCM
            Điện thoại tổng đài: 1900 2039 - bấm phím 2 (văn phòng Quận 4) hoặc bấm 423 (văn phòng Quận 12)
            Email: phongdaotao@ntt.edu.vn
    </footer>

    <script>
        var data_list = <?php echo json_encode($data_array);?>;
        var pie_data = <?php echo json_encode($NhanPTong);?>;
        var data_list_tb =  <?php echo json_encode($Diemtb);?>;
        var label_list =  <?php echo json_encode($label);?>;


        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'scatter',
            data: {
                labels: label_list,
                datasets: [{
                    type: 'bar',
                    label: 'Điểm bản thân',
                    data: data_list,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    hoverBorderWidth: 2,
                    hoverBorderColor: '#000',



                }, {
                    type: 'line',
                    label: 'Điểm trung bình của lớp',
                    data: data_list_tb,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    hoverBorderWidth: 2,
                    hoverBorderColor: '#000',
                }
                ]
            },
            options: {

                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
                ,
                legend: {
                    position: 'left',
                    align: 'middle'
                }
                ,
                responsitive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Kết quả học tập',
                        padding: {
                            top: 10,
                            bottom: 30
                        }
                    }
                }
            },
            

        });


        const data = {
            labels: [
                'Tín chỉ thiếu',
                'Tín chỉ đạt',
            ],
            datasets: [{
                label: 'My First Dataset',
                data: pie_data,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Số tín chỉ đạt được',
                        padding: {
                            top: 10,
                            bottom: 30
                        }
                        
                    }
                }
}
        };
        const newchart = new Chart(document.getElementById('piechart'), config,);
        
    </script>



</body>
</html>