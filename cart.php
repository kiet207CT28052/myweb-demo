<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }

    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    echo '<tr>
                            <td>'.($i+1).'</td>
                            <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td>
                                <a href="cart.php?delid='.$i.'">Xóa</a>
                            </td>
                        </tr>';
                }
                echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
            }else{
                echo "Giỏ hàng rỗng!";
            }    
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
    <link rel="stylesheet" href="CSS/cart.css">
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
<Div>
<div class="row">
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table border="2" class="thongtinnhanhang" id="bill">
                        <tbody><tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền (vnd)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="tongsanpham.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
</Div>

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