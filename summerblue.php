<?php
    session_start();
    $logined=0;
    if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap']=0;
    else $_SESSION['luottruycap']+=1;

    if(isset($_COOKIE['user'])&&isset($_COOKIE['pass'])){
        echo "Cookie đã đăng ký là: ".$_COOKIE['user']." - ".$_COOKIE['pass'];
    }

    if(isset($_GET['delc'])&&($_GET['delc']==1)){
        setcookie("user","",time()-(86400*7));
        setcookie("pass","",time()-(86400*7));
        echo "<br><font color='red'>Bạn đã xóa cookie</font>";
    }

    if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if(($user=="demo")&&($pass=="demo")){
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            $logined=1;
            $msg= "<br><font color='blue'>Các bạn đăng nhập thành công</font>";
        }else{
            $logined=0;
            $msg= "<br><font color='red'>Vui lòng đăng nhập</font>";
        }
        if(isset($_POST['ghinho'])&&($_POST['ghinho'])){
            setcookie("user",$user,time()+(86400*7));
            setcookie("pass",$pass,time()+(86400*7));
            $msgcookie="<br>Đã ghi nhận cookie!";
        }
    }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVENTS </title>
    <link rel="stylesheet" href="CSS/summer.css">
    <link rel="short icon" href="https://theme.hstatic.net/1000378196/1000788468/14/favicon.png?v=61" type="fashionEE.JNG">

</head>
<body>
    <div class="dungim">
        <div class="header">
            <div></div>
            <div >
                <a href="home.php">
                <img class="logo"  src="Picture/logolevents.png" alt="LEVENTS">
            </a>
        </div>
            <div class="icon1">
               
                <div class="icon_11">
                <a href="dangnhap.php"><button class="button1"><img width="20" height="20" src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="" title="" ></button></a>
               
               
               
                </div>
                <div class="search-box">
                    <input class="search-text" type="text" name="" placeholder="Tìm kiếm ">
                    <a class="search-btn" href="">
                        <img width="20px" height="20px" src="https://cdn-icons-png.flaticon.com/512/149/149852.png" alt="" title="" >
                    </a>
                </div>
               
                <a href="cart.php"><button class="button1"><img src="   https://cdn-icons-png.flaticon.com/512/2838/2838838.png " width="20" height="20" alt="" title="" class="img-small"></button></a>
                <button class="button1"><img src="   https://cdn-icons-png.flaticon.com/512/5373/5373330.png " width="20" height="20" alt="" title="" class="img-small"></button>
            </div>
            
        </div>
    </div>
<hr style="color:gray">
<div>
    <ul >
        <li>
            <div class="dropdown">
                <p class="dropbtn">SHOP <p>
                <div class="dropdown-content">
                  <a href="tongsanpham.php">Tất cả
                    <div class="dichuyen"></div>
                  </a>
                  <a href="tongsanpham.php">T-shirt
                    <div class="dichuyen"></div>
                  </a>
                  
                  <a href="tongsanpham.php">Polo
                    <div class="dichuyen"></div>
                  </a>
                  <a href="tongsanpham.php">Áo khoắc
                    <div class="dichuyen"></div>
                  </a>
                  <a href="tongsanpham.php">Quần
                    <div class="dichuyen"></div>
                  </a>
                  <a href="tongsanpham.php">Balo
                    <div class="dichuyen"></div>
                  </a>
                  <a href="tongsanpham.php">Phụ Kiện
                    <div class="dichuyen"></div>
                  </a>
                
                </div>
            </div>
        </li>
        <li  style="color: red;">SALE</li>
        <li class="lihead">BOLG</li>
        <a href="tongsanpham.php"><li class="lihead">Bộ sưu tập</li></a>
        <li class="lihead">Liên hệ</li>
        <a style="text-decoration: none;" href="Vechungtoi.php"><li class="lihead" >Về chúng tôi</li></a>
        <li class="lihead">Chăm sóc khách hàng</li>
    </ul>
</div>
<hr>
<div class="sp">
    <div></div>
    <div class="hinhsp"><img width="500px" src="https://levents.asia/wp-content/uploads/2022/07/PALM-TREE-TEE-B1-1-400x500.jpg" alt="SUMMERVIBE"></div>
<Div class="infor"><p style="font-size: 20px;">LEVENTS® SUMMER VIBE TEE/ BLUE</p>
    <p style="font-size: 25px; margin-top: 30px">370,000 vnđ</p>
    
    <p style="margin-top: 30px;">Màu sắc: BLUE</p>
    <div class="chonmau">
        <button class="mau1" style="width: 62px; height: 74px; border-color: white;"><img width="53px" src="https://levents.asia/wp-content/uploads/2022/07/PALM-TREE-TEE-B1-1-400x500.jpg" alt="SUMMERVIBE"></button>
        <button class="mau1" style="width: 62px; height: 74px; border-color: white;"><img width="53px" src="https://levents.asia/wp-content/uploads/2022/07/PALM-TREE-TEE-G1-1-400x500.jpg" alt="SUMMERVIBE"></button>
        <button class="mau1" style="width: 62px; height: 74px; border-color: white;"><img width="53px" src="https://levents.asia/wp-content/uploads/2022/07/PALM-TREE-TEE-R1-1-400x500.jpg" alt="SUMMERVIBE"></button>

    </div>
    <a>Size:</a>
    <div class="editsize">
     <div  ><button class="b1" style="width: 30px;">1</button></div>
     <div  ><button class="b1"style="width: 30px;">2</button></div>
     <div ><button class="b1" style="width: 30px;">3</button></div>
     <div ><button class="b1" style="width: 30px;">4</button></div>
    </div>
    <div>
    <form action="cart.php" method="post">
        <a>Số Lượng</a>
        
    <input type="number" name="soluong" min="1" max="10" value="1" style="margin-bottom: 20px">
    <hr>

    
    <input type="submit" name="addcart" value="Thêm vào giỏ " style="margin-top:20px ; width: 300px; height: 30px; background-color:black; color:white;">
    <input type="hidden" name="tensp" value="LEVENTS® SUMMER VIBE TEE/ BLUE">
    <input type="hidden" name="gia" value="370,000">
    <input type="hidden" name="hinh" value="picture/hinh1.jpg">
     
     </form>
     </div>
</Div>

<div></div>
</div>
<hr>
<div class="bottom">
    <div>
    <p class ="title">Về Chúng Tôi</p>

    <p  >Levents® – Popular Streetwear Brand</p>
    <p  class="p1">Thông tin doanh nghiệp:</p>
    <p >Hộ kinh doanh LEVENTS</p>
    <p>Gian 41 – 42, số 4 Phạm Ngũ Lão, phường Phạm Ngũ Lão, quận 1, thành phố Hồ Chí Minh</p>
    <p >Số – 41A8048485</p>
    <p >Mã số thuế – 8547618080</p>
    </div>
    <div class="information">
        <div>
            <div class="in1">LIÊN HỆ</div>
        <ul class="ul1">
            <li>
                Hotline
                <br>
                0934447139
            </li>
            <li>Email
                <br>
                contact@levents.vn
            </li>
            <li>Mon - Sun
            <br>
            09:30 ~ 21:30
        </li>
        </ul>
    </div>
        
    
    <Div>
        <div class="in2">CỬA HÀNG</div>
    <ul class="ul2">
        <li>325 Hoàng Sa, Tân Định,<br>
            quận 1, Hcm</li>
        <li>The New Playground,<br> 04 Phạm Ngũ Lão, quận 1, HCM</li>
        <li>842 Sư Vạn Hạnh,<br> phương 12, quận 10,<br> HCM</li>
        <li>54 Mậu Thân, Xuân Khánh,<br>quận Ninh Kiều,<br> Cần Thơ</li>
    </ul>
    </Div>
    <div>
        <div class="in3">HỖ TRỢ</div>
    <ul class="ul3">
        <li class="li4">Chăm sóc khách hàng</li>
        <a href="dangnhap.php"><li class="li3" style="text-decoration: none;">Tài khoản</li></a>
        <li class="li3">Điều khoản & sử dụng </li>
        <li class="li3">Chính sách sử dụng</li>
    </ul>
    </div>
    <div class="icontong">
        <div>
            <ul class="ul4">
                <li >
                    <a href="https://www.facebook.com/Leventsbrand">
                        <img  src=" https://cdn-icons-png.flaticon.com/512/20/20837.png" width="20px" height="20px" alt="" title="" class="img-small">
                    </a>
                    </li>
                <li>
                    <a href="https://www.instagram.com/levents.official/?hl=vi">
                    <img src=" https://cdn-icons-png.flaticon.com/512/1077/1077042.png" width="20px" height="20px" alt="" title="" class="img-small">
                </a>
            </li>
                <li>
                    <a href="https://www.tiktok.com/@levents.vn">
                        <img src=" https://cdn-icons-png.flaticon.com/512/3046/3046120.png" width="20px" height="20px" alt="" title="" class="img-small">
                    </a>
                </li>
                
                        <li>
                            <a href="https://www.youtube.com/channel/UChl4KY_EpOg4GAjrtKlu_vw">
                            <img src=" https://cdn-icons-png.flaticon.com/512/1384/1384028.png" width="20px" height="20px" alt="" title="" class="img-small">
                        </a>
                    </li>
            </ul>

        </div>
    </div>
    </div>
</div>
    
</div>

    <div class="bottom1">
        <div class="bottom2">
        
            <ul>
                <li class="li7">Levents® - Popular Streetwear brand</li>
                <li></li>
                <li class="li5">Tuyển dụng</li>
                <li class="li6">Term & Policies</li>
            </ul>
   
    
        </div>
    </div>
    










</body>

</html>