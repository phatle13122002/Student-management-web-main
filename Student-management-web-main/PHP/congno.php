<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/website thông tin sinh viên/xhtml">
    <head>
        <title>Thông tin sinh viên</title>
        <meta charset="utf-8">
        <link rel="stylesheet"  type=""  href="x">
        <link rel="stylesheet" type="text/css" href="../CSS/1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div id="container">
            <div class="header">
                <div class="logo">
                    <p>logo</p>
                </div>

                <div class="menu">
                    <ul class="list_menu">
                        <div class="search_text"><a href="#"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</a>
                            <input type="text" class="search_input" name="search"/>
                        </div>
                        <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Tin tức</a></li>
                    </ul>    
                </div>
            </div>

            <div id="main">
                <h1 style="color:red;"> TRA CỨU CÔNG NỢ</h1>
                <label for="Variable">Chọn Học Kì:</label>
                    <select id="Variable" onchange="printCN(this.value)">
                    <option value="0">Tất cả</option>
                    <option value="1">Đợt 1 năm 2020</option>
                    <option value="2">Đợt 2 năm 2020</option>
                    <option value="3">Đợt 3 năm 2020</option>
                    </select>
            <div class="title">
                <table style="width:100%">
                    <tr style="background-color: #0080ff">
                        <th class = "sv" >MASV</th>
                        <th class = "thp" >Tên Học Phần</th>
                        <th class = "tthp" >Trạng thái đăng kí</th>
                        <th class = "hp" >Học Phí(VNĐ)</th>
                    </tr>
                </table></div>
            <div>
                <table id="printCN" style='width:100%;'></table>
            </div>
                
        </div>
<script>
    function printCN(str) {
  if (str == "") {
    // document.getElementById("txtHint").innerHTML = "";
    // return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("printCN").innerHTML = this.responseText;
  }
  xhttp.open("GET", "datacn.php?q="+str);
  xhttp.send();
}
    </script>
    </body>
</html>