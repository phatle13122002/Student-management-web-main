<html>
<head>
    <title>đăng kí học phần</title>
    <meta charset="utf-8">
    <link rel="stylesheet"  Content-Type="text/css" href="../CSS/css_dkhp.css">
   
</head>
<body>
    <div id="top_bar">
    </div>

    <div id="bodyPage">
        <div id="menu_slide">
            <ul>
                <li><a>Trang Chủ</a></li>
                <li><a>Thông tin cá nhân</a></li>
                <li><a>Đăng kí học phần</a></li>
                <li><a>Công nợ</a></li>
            </ul>
        </div>
        <div id="container">

            <div id="banner_top">
                <div id="logo">
                    <div id="banner_top">
                        <div id="logo"><img src="../images/logo_gr.png" /></div>
                    </div>
                </div>
            </div>

            <div id="nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Products</a>
                        <ul class="sub-menu">
                            <li><a href="#">Menu item 2.1</a></li>
                            <li><a href="#">Menu item 2.2</a>
                                <ul class="sub-menu-1">
                                    <li><a href="#">Menu item 2.2.1</a></li>
                                    <li><a href="#">Menu item 2.2.2</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Menu item 2.3</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li><li><a href="#">Specials</a></li>
                    <li class="divider"></li><li><a href="#">Contact Us</a></li>
                    <li class="divider"></li><li><a href="#">Sign Up</a></li>
                    <li class="divider"></li><li><a href="#">Shipping</a></li>
                    <li class="divider"></li><li><a href="#">My account</a></li>
                    <li class="divider"></li>
                </ul>
            </div>    
   
            <div class="chonHKy">
                <div>
                    <tr>
                        <td id="chonHKy">
                            <select name="HP" id= "HP" onchange="HP(this.value)">
                            <option value="0">Chọn đợt đăng kí</option>
                            <option value="1">Đợt 1 năm 2021</option>
                            <option value="2">Đợt 2 Năm 2021</option>
                            <option value="3">Đợt 3 năm 2021</option>
                            <option value="4">Đợt 1 năm 2022</option>
                            <option value="5">Đợt 2 Năm 2022</option>
                            <option value="6">Đợt 3 năm 2022</option>
                            <option value="7">Đợt 1 năm 2023</option>
                            <option value="8">Đợt 2 Năm 2023</option>
                            <option value="9">Đợt 3 năm 2023</option>
                            <option value="10">Đợt 1 Năm 2024</option>
                            <option value="11">Đợt 2 năm 2024</option>
                        </td>  
                    <tr>
                    <div class="typeStudy">
                    <label class="mt-radio">
                        <input checked="checked" id="rdoLoaiDangKyHocPhan" name="rdoLoaiDangKyHocPhan" type="radio" value="1"> <label lang="dangkyhocphan-dangkymoi">Học mới</label>
                        <span></span>
                    </label>
                            <label class="mt-radio">
                            <input id="rdoLoaiDangKyHocPhan" name="rdoLoaiDangKyHocPhan" type="radio" value="2"> <label lang="dangkyhocphan-dangkyhoclai">Học lại</label>
                            <span></span>
                        </label>
                        <label class="mt-radio">
                            <input id="rdoLoaiDangKyHocPhan" name="rdoLoaiDangKyHocPhan" type="radio" value="3"> <label lang="dangkyhocphan-dangkyhoccaithien">Học cải thiện</label>
                            <span></span>
                        </label>
                    </div>
                </div>
             
            <div id="HP">
            <div class="HP">
                <div id="HP_title">
                    <table>
                        <tr >
                            <th class="selectedHP"></th>
                            <th class="stt">STT</th>
                            <th class="maHP">Mã Học Phần</th>
                            <th class="tenHP">Tên Học Phần </th>
                            <th class="soTC">Số Tín Chỉ</th>
                            <th class="hocky"> Học Kỳ</th>
                            <th class="status">Trạng Thái Đăng Kí</th>   
                        </tr>
                    </table>
                </div>   
                <div id="HP_ChDK"></div> 
            </div>   

            <div Class="HP_DADK">
                <div><button id='buttonDK' name='DKy' value='' onclick=HP_DADK(this.value) >Hiển thị môn đã đăng ký</button></div>
                <div id="HP_title">
                    <table>
                        <tr >
                            <th class="stt">STT</th>
                            <th class="maHP">Mã Học Phần</th>
                            <th class="tenHP">Tên Học Phần </th>
                            <th class="soTC">Số Tín Chỉ</th>
                            <th class="hocky"> Học Kỳ</th>
                            <th class="status">Trạng Thái Đăng Kí</th>   
                        </tr>
                    </table>           
                <div id="HP_DADK"> </div> 
            </div>    
            </div>
            <div class="HP_HDK">
            <div><button id='buttonDK' name='HuyDK' value='1' onclick=HP_HuyDK(this.value) >Hiển thị môn sẽ hủy</button></div>
                <div id="HP_title">
                    <table>
                        <tr >
                            <th class="selectedHP"></th>
                            <th class="stt">STT</th>
                            <th class="maHP">Mã Học Phần</th>
                            <th class="tenHP">Tên Học Phần </th>
                            <th class="soTC">Số Tín Chỉ</th>
                            <th class="hocky"> Học Kỳ</th>
                            <th class="status">Trạng Thái Đăng Kí</th>   
                        </tr>
                    </table>
                </div>
                <div id="HP_HUYDK"></div>
            </div>
            </div>
        </div> 
    </div> 
    <div id="footer"></div>
</body>
    

<script>

    // funcion lấy học kỳ
    function HP(str) {
        if (str=="0") {
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                
            document.getElementById("HP_ChDK").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","HP.php?q="+str,true);
        xmlhttp.send();
    }


    // funcion in ra Học phần để hủy
    function Huy_HP(str) {
        if (str=="0") {
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                
            document.getElementById("HP_HUYDK").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","HP_HUYDK.php?q="+str,true);
        xmlhttp.send();
    }


    // funcion in ra Học phần đã đăng kí
    function HP_DADK(str) {
        if (str=="0") {
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("HP_DADK").innerHTML=this.responseText;
                
            }
        }
        xmlhttp.open("GET","printHP.php?x="+str,true);
        xmlhttp.send();
    }


    // function để hủy các môn đã đăng kí
    function HP_HuyDK(str) {
        if (str=="0") {
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("HP_HUYDK").innerHTML=this.responseText;
                
            }
        }
        xmlhttp.open("GET","HuyHP.php?x="+str,true);
        xmlhttp.send();
    }


    // function lấy môn được chọn từ HP
    function selectedHP(str) {
        if (str=="0") {
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            // document.getElementById("regHP").innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","HP_DK.php?c="+str,true);
        xmlhttp.send();
    }


    // ẩn hiện nút đăng ký
    // if( document.getElementById("buttonDK").style.display='none' ){
    //     document.getElementById("buttonDK").style.display='';
    //     document.getElementById("buttonDK").style.visibility = 'visible';
    // }

</script>

</body>
</html>