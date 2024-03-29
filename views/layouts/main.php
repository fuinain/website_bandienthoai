<?php
use app\core\Application;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="assets/img/logo-fav.png" />
<title>ShopPhone.VN</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.1.min.js"%3E%3C/script%3E'))</script>
<script> $(document).ready(function() {
window.catalog_rotate = 0;

window.sb_submenu = 1;
 });</script>
<script src="js/menucatalog.js"></script>
 <script src="js/1399642332.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/popupwindow.css">
<script src="js/popupwindow.js"></script>
<script src="js/demo.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox-media.js"></script>

</head>

<body   data-control="Index">
  <div style="background:green;color:white;display:flex;align-items:center;justify-content: center;">
  <?php Application::$app->showErrorMsgs('products', true)?>
  <?php Application::$app->showMsg('success')?>
  </div>
<div id="page-top">
  <div class="pagecuston">
    <div class="wrap">
      <ul class="menu-top">
        <?php if (!Application::$app->session->get('user_')) {?>
          <li>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3">
                <a id="open-pop-up-1" href="#pop-up-1">Đăng nhập/Đăng ký</a>
        </div></li>
        <?php } else {?>
          
        <li>
          
          <div style="color: green;position: absolute;top: 6px;right: 375px;font-size: 18px;font-style: italic;padding: 5px 10px 5px 0px;"  class="tenDangNhap">Hi: <?= Application::$app->session->get('user_')->login_id ?></div>
          </li>
            <li>
        <div  style="cursor: pointer;color: white;" id="sw_dropdown_3" >
        <?php if(Application::$app->session->get('user_')->role == 0) { ?>
        <a style="color: #000;position: absolute;top: 0px;" href="/user" class="thongTinUser">Thông tin tài khoản</a>
        <?php }?>
        
                <a style="color: #000;position: absolute;top: 40px;" href="/logout?rd=3">Đăng xuất</a>
        </div></li>
        <?php }?>
      </ul>
   <div id="pop-up-1" class="pop-up-display-content">

    <div class="plans_table">
        	<h2 class="h2-login">Đăng nhập /Đăng ký</h2>
          <div id="login">
		<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>
		<form action="/login" method="POST">

			<fieldset>

				<p><label for="email">Tên đăng nhập (*)</label></p>
				<p><input type="text" id="email" name="login_id" value="Tài khoản của bạn " onBlur="if(this.value=='')this.value='Tài khoản của bạn '" onFocus="if(this.value=='Tài khoản của bạn ')this.value=''"></p> <!-- JS because of IE support; better: placeholder="Tài khoản của bạn " -->

				<p><label for="password">Mật khẩu(*)</label></p>
				<p><input type="password" name="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
	<!-- <p><label>Quên mật khẩu?</label></p> -->
				<p><input type="submit" value="Đăng nhập"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
      <div id="res">

		<h2><span class="fontawesome-lock"></span>Khách hàng chưa đăng ký</h2>

		<form action="/register" method="POST">

			<fieldset>

				<p><label for="HoTen">Họ và Tên (*) </label>
				<input required type="HoTen"  id="HoTen" placeholder="Họ và Tên" name="firstname"></p>
					<p><label for="SDT">Số Điện Thoại (*) </label>
				<input required type="SDT"  id="SDT" name="phone" placeholder="Số Điện Thoại" ></p>
                	<p><label for="Email-l">Email (*) </label>
				<input required type="Email-l"  id="Email-l" name="email" placeholder="Tài khoản của bạn " ></p>
            <p><label for="TDN">Tên đăng nhập (*) </label>
				<input required type="TDN"  id="TDN" placeholder="Tên đăng nhập (*)" name="login_id"></p>
                  <p><label for="password">Mật Khẩu (*)</label>
				<input required type="password"  id="password" placeholder="password" name="password" ></p>
				<p><input type="submit" value="Đăng ký" ></p>

			</fieldset>

		</form>

	</div> <!-- end login -->



    </div>
  </div>


    </div>
  </div>
</div>
<!-------end#page-top--->
<div id="page-all">
  <div id="header">
    <div class="header_top">
      <div class="wrap">
        <div class="logo"> <a href="/"><img src="images/logomt.png" alt="" title="logo" /></a> </div>
        <!-------end#logo--->
        <div class="shopping-header">
          <div class="cskh">
            <div><a href="#">
              <div class="usp-sp-icon usp-sprite usp-sp-warp">
                <div class="usp-sprite warp-animation"></div>
                <div class="usp-sprite warp-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Đổi trả hàng
                  trong 10 ngày</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->
          </div>
          <div class="cskh">
            <div><a href="#">
              <div class="usp-sp-icon usp-sprite usp-sp-cash">
                <div class="usp-sprite cash-animation"></div>
                <div class="usp-sprite cash-static"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline"> Thanh toán thuận tiện</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->
          </div>
          <div class="cskh">
            <div><a href="#">
              <div class="usp-sp-icon usp-sp-ship usp-sprite">
                <div class="usp-sprite ship-animation"></div>
              </div>
              <div class="usp-sp-desc">
                <div class="strong uspline">Vận chuyển
                  miễn phí</div>
                <div class="uspline-sub"></div>
              </div>
              </a>
            </div>
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->

          </div>
          <div class="cskh">
            <div>
          <a href="card">
              <div class="usp-sp-icon usp-sprite usp-sp-cart ">
                <div class="usp-sprite cart-animation">
                </div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(<?php echo !empty($cart) ? count($cart) : 0 ?>) </span> Giỏ hàng </div>
              <div class="uspline-sub"></div>
            </div>
    </a>
          </div>
          <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> --->
        </div>
      </div>
      <!-----end#shopping_header--->

    </div>
    <!-----end#header-top--->
    <div id="nav-top">
      <div class="wrap">
        <div class="typical">
          <!-- <h3>Sản phẩm mới</h3> -->
        <link rel="stylesheet" type="text/css" href="css/jsCarousel-2.0.0.css">
        <script src="js/jsCarousel-2.0.0.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {

            $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 1, orientation: 'v' });
            $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 3, orientation: 'h' });
            $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: true, itemstodisplay: 3, orientation: 'h' });

        });

    </script>


          <div class="flexslider">
       <div id="carouselv">
     <div>
                             <a href="#">Nhiều ưu đãi, khuyến mãi</a></div>
                             <div>
                             <a href="#">Giao hàng miễn phí</a></div>
                             <div>
                             <a href="#">Bảo hành chính hãng</a></div>

     </div>
          </div>
        </div>
        <div class="search-home">
          <form action="/" id="search-box" >
            <div class="search-wapper">
              <input type="text"  class="text-search" name="q" placeholder="Nhập tên sản phẩm cần tìm"/>
              <button type="submit" class="search-btn" > TÌM KIẾM </button>
            </div>
          </form>
        </div>
        <!-- <div class="like-face"> <img src="images/icon-like.png" alt="" /> </div> -->
      </div>
    </div>
    <!--------end#nav-top---->
  </div>
</div>


{{content}}

  <div id="footer" style="align-items:center;">

    <div class="footer-top" style="align-items:center;">
      <div class="wrap" style="width: 100%, align-items=center;" >
    <div class="fot-col">
    <div class="fotitle">THÔNG TIN</div>
    <ul class="linklist">
    <li><a href="#">Lịch sử hình thành</a></li>
     <li><a href="#">Vị trí shop</a></li>
       <li><a href="#">Tuyển dụng</a></li>
     <li><a href="#">Tin tức</a></li>
      <li><a href="#">Tin khuyến mại</a></li>
       <li><a href="#">Cam kết thông tin</a></li>
          <li><a href="#">Khiếu nại</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">HỖ TRỢ KHÁCH HÀNG</div>
    <ul class="linklist">
    <li><a href="#">Liên hệ: 0354 234 249</a></li>
     <li><a href="#">Phương thức thanh toán</a></li>
      <li><a href="#">Hướng dẫn mua hàng</a></li>
      <li><a href="#">Chính sách đổi trả hàng</a></li>
      <li><a href="#">Trung tâm bảo hành</a></li>
      <li><a href="#">Báo phí vận chuyển</a></li>
      <li><a href="#">Chính sách bảo hành</a></li>

    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">CÁCH THỨC THANH TOÁN</div>
    <ul class="list-horiontal payment-list">
    <li><a href="#">Thanh toán khi nhận hàng (COD)</a></li>
      <li><a href="#">Thanh toán qua VNPay</a></li>
    </ul>
    </ul>
    </div>
    <div class="fot-col3">
    <div class="fotitle">THƯƠNG HIỆU NỔI TIẾNG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li><a href="#">Apple</a></li>
      <li><a href="#">Samsung</a></li>
      <li><a href="#">Xiaomi</a></li>
      <li><a href="#">OPPO</a></li>
      <li><a href="#">Realme</a></li>
      <li><a href="#">POCO</a></li>
    </ul>

    </div>
     </div>
    <!-- <div class="socal">
<div class="share-icon">
<a href="link_facebook" class="facebook"></a><span>Facebook </span>
<a href="link_twitter" class="twitter"></a><span> Twitter</span>
<a href="link_googleplus" class="google"></a><span>Google</span>
</div>
    </div> -->
    </div>
    </div>
    </div>
    <!-------end.footer-top--->
    <div class="copy-footer">
    <div class="wrap">
    <b>WEBSITE CỬA HÀNG ĐTDĐ TẠI VĨNH LONG</b>
    <p>Địa chỉ: 73 Nguyễn Huệ, Phường 2, TP, Vĩnh Long</p>
    <p>Điện thoại: 0354 234 249 | Email: 21004266@st.vlute.edu.vn</p>
</div>
    </div>
    <!---------end.copy-footer--->
  </div>
  </div>
  <!-------end#footer-top------->
</div>
<!-------end#page-all--->

</body>
</html>
