<?php
session_start();
if($_SESSION['login']==false){
    header('location:index.php');
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Học sinh</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/login_style.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/table_style.css" />
    
    <script src="../JS/admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <script src="../JS/ajax_admin.js"></script>
    
</head>
<body>
    
    <div id="container">
        <div id="top_bar">
            <div class="top_search">
                <div class="search_text"><a href=#>Tìm kiếm:</a></div>
                <input type="text" class="search_input" name="search"  placeholder="Nhập mã số sinh viên"/>
                <input type="image" src="../images/search.gif" class="search_bt" />
            </div>
            <div class="languages">
                <div class="lang_text">Ngôn ngữ:</div>
                <a href="#" class="lang"><img src="../images/en.gif" alt="" border=0 /></a>
                <a href="#" class="lang"><img src="../images/OIP.jpg" alt="" border=0 width="26px" /></a>
            </div>
        </div>
        <div id="banner_top">
            <div id="logo"><img src="../images/OIP.webp"></div>
        </div>
        <div id="nav">
            <ul>
                <li><a href="#" >Trang Chủ</a></li>
                <li class='divider'></li>
                <li><a href="#">Giới Thiệu</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Thông Báo</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Chương Trình Giáo Dục</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Văn Bản, Quy Định</a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Sinh Viên</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout.php" >Logout</a>
                </li>
                
            </ul>        
        </div>

        <div id="left">
            <div class="title_box">Chuyên Ngành</div>
            <ul class="left_menu">
                <li class="odd"><a href="#">Công Nghệ Thông Tin</a></li>
                <li class="even"><a href="#">Quản Trị Kinh Doanh</a></li>
                <li class="odd"><a href="#">Nhà Hàng Khách Sạn</a></li>
                <li class="even"><a href="#">Ngôn Ngữ Anh</a></li>
                <li class="odd"><a href="#">Tài Chính Ngân Hàng</a></li>
                <li class="even"><a href="#">Thiết Kế Thời Trang</a></li>
                <li class="odd"><a href="#">Thiết Kế Đồ Họa</a></li>
                <li class="even"><a href="#">Kinh Doanh Quốc Tế</a></li>
               
            </ul>
            <div class="title_box">Ưu Đãi</div>
            <div class="border_box">
                <div class="product_title"><a href="details.html">Cơ hội nhận được học bổng 100%</a></div>
                <div class="product_img"><a href="details.html"><img src="../images/hocbong.jpg" alt="" border="0" width="150px" height="150px"/></a></div>
                <div class="prod_price"><span class="reduce">$2000</span><span class="price">$0</span></div>
            </div>
            <div class="title_box">Cung cấp email của bạn</div>
            <div class="border_box">
                <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
                <a href="#" class="join">join</a>
            </div>
            
        </div>

        <div id="maincontent" style="background-color:pink;" >
            <div class='changeContent' align='center'>
                <br>
                <button class='btn' onclick=decreaseValue()><</button>
                
                <input type="text" class='numPage' id ='STT' disabled value='0'> 
               
               
                <button class='btn' onclick = increaseValue()>></button>
                <br><br>
                <button class='displayadd'>Thêm sinh viên</button>
            
            </div>
            <div class = 'receive'>
                <br>
                <hr>
                <h1>Chọn giá trị tăng giảm để xem thông tin các sinh viên</h1>
                <hr>
            </div>

        </div>
        <div id="right"><h1><hr>
            Kết quả tìm kiếm<hr>
            <div class='search_result'>

            </div>
        </h1>
        </div>
        <div id="footer">
            <h3>Copyright@ 2022 Linh Group</h3>
            <a href="#">About us:</a><br>
            <a href="#">Email: clown@gmail.edu.vn</a><br>
            <a href="#">Số điện thoại (hotline): 1900 561 240 </a><br>
    </div>
    </div>

</body>
</html>