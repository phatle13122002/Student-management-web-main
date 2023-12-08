<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    if (!empty($_POST['name']) && !empty($_POST['password']))
    {   
        $name=$_POST['name'];
        $pwd = $_POST['password'];
        require('data.php');
        $query = "select * from users where username='$name' and pass_word='$pwd'";
        $result = mysqli_query($conn,$query);
        if ($row = mysqli_fetch_array($result))
        {
            $_SESSION['username'] = $row['username'];
            $_SESSION['uid'] = $row['masv'];
            $_SESSION['login'] = true;
            if ($_SESSION['username'] == 'admin'){
                
                header('location:admin.php');
            }
            else
            {
                header("location:home.php");
            }
            
        }
        else
        {
            echo "<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
        }
    }
    else
{
    echo "<script>alert('Không được để trống thông tin đăng nhập')</script>";
}
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Học sinh</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../CSS/login_table.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login_style.css" />
</head>
<body>
    
    <div id="container">
        <div id="top_bar">
            <div class="top_search">
                <div class="search_text"><a href=#>Tìm kiếm:</a></div>
                <input type="text" class="search_input" name="search" />
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
                <li><a href="#">Trang Chủ</a></li>
                <li class='divider'></li>
                <li>
                    <a href="#">Giới Thiệu</a>
                    <ul class="sub-menu">
                        <li><a href="#">Phòng đào tạo</a></li>
                        <li><a href="#">Website cũ</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="#">Thông Báo</a>
                    <ul class="sub-menu">
                        <li><a href="#">Đào tạo</a></li>
                        <li><a href="#">Lịch học, lịch thi</a></li>
                        <li><a href="#">Tân sinh viên</a></li>
                        <li><a href="#">Học phí</a></li>
                        <li><a href="#">Học vụ</a></li>
                        <li><a href="#">Tốt nghiệp</a></li>
                        <li><a href="#">Công tác sinh viên</a></li>
                    </ul>
                </li>
                <li class="divider"></li>

                <li><a href="#">Chương Trình Giáo Dục</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tiến độ đào tạo</a></li>
                        <li><a href="#">Danh mục ngành đào tạo</a></li>
                        <li><a href="#">Chuẩn đầu ra</a></li>
                        <li><a href="#">Chương trình đào tạo</a></li>
                        <li><a href="#">Đề cương chi tiết học phần</a></li>
                        <li><a href="#">Liên kết quốc tế</a></li>
                        <li><a href="#">Đề án mở ngành đào tạo</a></li>
                       
                    </ul>
                </li>
                <li class="divider"></li>

                <li><a href="#">Văn Bản, Quy Định</a>
                    <ul class="sub-menu">
                        <li><a href="#">NTTU</a></li>
                        <li><a href="#">Bộ GDĐT</a></li>
                        <li><a href="#">Chính phủ</a></li>
                        <li><a href="#">Luật</a></li>
                    </ul>
                </li>
                <li class="divider"></li>

                <li><a href="#">Sinh Viên</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tra cứu thông tin</a></li>
                        <li><a href="#">Học, thi trực tuyến</a></li>
                        <li><a href="#">Cẩm nang</a></li>
                        <li><a href="#">Thư viện</a></li>
                        <li><a href="#">Thực tập, việc làm</a></li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li><a href="#">Giảng Viên</a>
                    <ul class="sub-menu">
                        <li><a href="#">Thông tin</a></li>
                        <li><a href="#">Phòng TỔ chức nhân sự</a></li>
                        <li><a href="#">Thống kê giờ giảng</a></li>
                    </ul>
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
            <div class="mobile-container">
                <div class="center" style="top:75%;">
                    <h1>Login</h1>
                    <form method="post">
                        <div class="text-field">
                            <input type="text" name='name' required>
                            <span></span>
                            <label>Username</label>  
                        </div>
                        <div class="text-field">
                            <input type="password" name='password' required>
                            <span></span>
                            <label>password</label>
                        </div>
                        <div class="pass">Forgot Password</div>
                        <input type="submit" value="login">
                        <div class="signup_link">Not a member? <a href='#'>Sign Up</a></a></div>
                    </form>
                </div>
            </div>
            
        </div>

        <div id="right"><h1>Cơ hội xét tuyển</h1>
            <form class="xethocba">
                <table>
                    <tr>
                        <td class="note">Họ và tên:</td>
                        <td><input type="text" />(*)</td>
                    </tr>
                    <tr>
                        <td class="note">Địa chỉ:</td>
                        <td><input type="text"  /></td>
                    </tr>
                    <tr>
                        <td class="note">Email:</td>
                        <td> <input type="text"  />(*)</td>
                    </tr>
                    <tr>
                        <td class="note">Giới tính:</td>
                        <td>
                            <input type="radio" name="phai" value="nam" />
                            <label for="nam">Nam</label>
                            <input type="radio" name="phai" value="nu" />
                            <label for="nu">Nữ</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="note">Tuổi:</td>
                        <td><input type="text"/>(*)</td>
                    </tr>
                    <tr>
                        <td class="note">Sở thích:</td>
                        <td>
                            <input type="checkbox" id="sport" value="Thể thao" />
                            <label for="sport">Thể thao</label>
                            <br />
    
                            <input type="checkbox" id="literature" value="Văn" />
                            <label for="literature">Văn</label>
                            <br />
    
                            <input type="checkbox" id="it" value="Công nghệ thông tin" />
                            <label for="it">Công nghệ thông tin</label>
                            <br />
    
                            <input type="checkbox" id="history" value="Lịch sử" />
                            <label for="history">Lịch sử</label>
                            <br />
    
                            <input type="checkbox" id="game" value="Game" />
                            <label for="game">Game</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="note">Chuyên ngành:</td>
                        <td><select id="major">
                                <option>Công nghệ thông tin</option>
                                <option>Quản Trị Kinh Doanh</option>
                                <option>Nhà Hàng Khách Sạn</option>
                                <option>Ngôn Ngữ Anh</option>
                                <option>Tài Chính Ngân Hàng</option>
                                <option>Thiết Kế Đồ Họa</option>
                                <option>Kinh Doanh Quốc Tế</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="note">Yêu cầu:</td>
                        <td><textarea></textarea></td>
                    </tr>
                    <tr>
                        <td class="note"></td>
                        <td>
                            <button type='submit' >Gửi thông tin</button>
                            <button type='reset'>Nhập lại</button>
                        </td>
                    </tr>
                </table>
    
            </form>
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