<?php
session_start();
$session=session_id();
@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './admin/lib/');
include_once _lib."Mobile_Detect.php";
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

$lang_default = array("");

if(isset($_SESSION['lang']))
{
	$lang=$_SESSION['lang'];
}
else
{
	$lang="";
}
require_once _source."lang$lang.php";	
include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."class.database.php";
include_once _lib."functions_user.php";
include_once _lib."functions_giohang.php";
include_once _lib."file_requick.php";
include_once _source."counter.php";	
?>

<!doctype html>
<html lang="vi">
<head itemscope itemtype="http://schema.org/WebSite" >
  <base href="http://<?=$config_url?>/" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0, user-scalable=yes">
  <link rel="canonical" href="<?=getCurrentPageURL()?>" />
  <?php include _template."layout/seoweb.php";?>
  <?php include _template."layout/web_css.php";?> 
  <?=$company['codethem']?>   
</head>
<body >
  <div id="wapper">
    <?php if($template!='giohang') {  ?>
      <div class="wap_menu <?php if($template=='index') echo 'fixed_index'?>">
        <div class="menu">
          <?php include _template."layout/menu_top.php";?>
        </div><!---END .menu-->
      </div><!---END .wap_menu--> 
    <?php } ?>

    <?php if($template=='index') {  ?>
      <div id="slider">
        <?php include _template."layout/slider.php";?>
      </div>    
    <?php } ?>

    <?php if($template=='index') {  ?>
      <div id="slider">
        <?php include _template."layout/background.php";?>
      </div>    
    <?php } ?>

    <div id="main_content">
      <?php include _template.$template."_tpl.php"; ?>   
      <div class="clear"></div>
          <?php if($template=='index') {  ?>
      <div id="slider">
        <?php include _template."layout/tienich.php";?>
      </div>    
    <?php } ?>
  </div>


  <?php if($template=='index') {  ?>
      <div id="blog">
        <?php include _template."layout/blog.php";?>
      </div>    
    <?php } ?>
  
      
    <?php if($template!='giohang') {  ?>

      <div id="background">
        <?php include _template."layout/banner.php";?>
        <div class="clear"></div>
      </div>
    <?php } ?>
    </div>


    <div class="clear"></div>

    <?php if($template!='giohang') {  ?>

      <div id="wap_footer">
        <?php include _template."layout/footer.php";?>
        <div class="clear"></div>
      </div>
    <?php } ?>
  </div>


  <div id="slide_menu">
    <?php include _template."layout/slide_menu.php";?>
  </div>
  <div class="load_session_cart">
    <div class="wp_session_cart">
      <h3>ĐÃ THÊM <span class="quantity_session"><?php echo count($_SESSION['cart']); ?> SẢN PHẨM</span> VÀO GIỎ HÀNG</h3>
      <div class="check_out">
        <a href="gio-hang.html" class="check_out_btn">Xem giỏ hàng</a>
        <a href="san-pham.html" class="shopping_btn">Tiếp tục mua hàng</a>
      </div>
       <span class="close_cart"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="24" height="24"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M40.90039,30.76628l-10.13411,10.13411l45.09961,45.09961l-45.09961,45.09961l10.13411,10.13411l45.09961,-45.09961l45.09961,45.09961l10.13411,-10.13411l-45.09961,-45.09961l45.09961,-45.09961l-10.13411,-10.13411l-45.09961,45.09961z"></path></g></g></svg>
      </span>
    </div>
  </div>
    <?php include _template."layout/web_js.php";?>
    <?php include _template."layout/giohang_ajax.php";?>
    <?php //include _template."layout/pupop.php"; ?>
    <?php //include _template."layout/fb_chat_chay.php"; ?>
    <?php //include _template."layout/donotcopyme.php"; ?>
    <!-- <div class="over-play"></div> -->
  </body>
  </html>

