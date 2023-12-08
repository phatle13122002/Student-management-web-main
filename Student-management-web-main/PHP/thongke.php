<?php
 require('data.php') ?>


<html>
<head>
    <title>thống kê</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/css_dkhp.css">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="top_bar">
        <div class="top_search">
            <div class="search_text"><a href='home.php'>Advanced Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="../images/search.gif" class="search_bt" />
        </div>
        <!-- <div class="languages">
            <div class="lang_text">Languages:</div>
            <a href="#" class="lang"><img src="../images/en.gif" alt="" border=0 /></a>
            <a href="#" class="lang"><img src="../images/de.gif" alt="" border=0 /></a>
        </div> -->
    </div>

    <div id="bodyPage">
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
                    <li><a href="#">Home</a></li>
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
                    <li class="currencies">Currencies
                        <select>
                            <option>UA Dollar</option>
                            <option>Euro</option>
                        </select>
                    </li>
                </ul>
            </div>
             
        <div>
        </div>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
                var HB = google.visualization.arrayToDataTable([
                    ['LOAIHB','SLHB'],    
                    <?php  

                    $truyvanHB = "SELECT LOAIHB, COUNT(*) AS SLHB FROM hocbong GROUP BY LOAIHB";

                                $HB = mysqli_query($conn,$truyvanHB);
                                while($row = mysqli_fetch_array($HB)){

                                    echo "['".$row['LOAIHB']."',".$row['SLHB']."],";
                                }
                                ?> 
                ]);

                var SLHB = {
                title: 'Số lượng học sinh có học bổng',
                };
                

                var GT = google.visualization.arrayToDataTable([
                    ['Giới Tính','Số Lượng'],    
                    <?php  

                    $truyvanGT = "SELECT PHAI AS \"Giới Tính\", COUNT(*) AS \"Số Lượng\" FROM sinhvien GROUP BY PHAI;";

                                $GT = mysqli_query($conn,$truyvanGT);
                                while($row = mysqli_fetch_array($GT)){

                                    echo "['".$row['Giới Tính']."',".$row['Số Lượng']."],";
                                }
                                ?> 
                ]);

                var SLGT = {
                title: 'Số lượng giới tính học sinh',
                
                };

                var CN = google.visualization.arrayToDataTable([
                    ['Công Nợ','Số Lượng'],    
                    <?php  

                    $truyvanCN= "SELECT CONGNO, COUNT(*) AS \"Số Lượng\" FROM sinhvien GROUP BY CONGNO=\"NULL\";";

                                $CN = mysqli_query($conn,$truyvanCN);
                                while($row = mysqli_fetch_array($CN)){

                                    echo "['".$row['CONGNO']." VND',".$row['Số Lượng']."],";
                                }
                                ?> 
                ]);

                var SLCN = {
                title: 'Thống kê công nợ học sinh',
                };

                var HSCL = google.visualization.arrayToDataTable([
                    ['Tên Lớp','Số Học Sinh'],    
                    <?php  

                    $truyvanHSCL="SELECT TENLOP AS \"Tên Lớp\", sum(SL_SV) AS \"Số Học Sinh\" FROM lop GROUP BY tenlop;";

                                $HSCL = mysqli_query($conn,$truyvanHSCL);
                                while($row = mysqli_fetch_array($HSCL)){

                                    echo "['".$row['Tên Lớp']."',".$row['Số Học Sinh']."],";
                                }
                                ?> 
                ]);

                var SLHSCL = {
                title: 'Số lượng học sinh các lớp chuyên ngành ',
                };


            var chart = new google.visualization.PieChart(document.getElementById("HB"));
            chart.draw(HB,SLHB);
            var chart = new google.visualization.PieChart(document.getElementById("GT"));
            chart.draw(GT,SLGT);
            var chart = new google.visualization.PieChart(document.getElementById("CN"));
            chart.draw(CN,SLCN);
            var chart = new google.visualization.PieChart(document.getElementById("HSCL"));
            chart.draw(HSCL,SLHSCL);
            }
            
        </script>
        <div id="HB" style="width: 100%; height: 300px;"></div>
        <div id="GT" style="width: 100%; height: 300px;"></div>
        <div id="CN" style="width: 100%; height: 300px;"></div>
        <div id="HSCL" style="width: 100%; height: 300px;"></div>
    </div>

    <div id="footer"></div>
  
                    

</body>
</html>