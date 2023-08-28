<?php
$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb,noibat from #_product_danhmuc where hienthi=1 and noibat=0 and type='sanpham' order by stt,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();	

$d->reset();
$sql = "select tenkhongdau,ten$lang as ten,id,photo from #_news where type='album'";
$d->query($sql);
$dslookbook = $d->result_array();

$d->reset();
$sql_banner = "select photo from #_background where type='logo' limit 0,1";
$d->query($sql_banner);
$row_logo = $d->fetch_array();


$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb from #_news where hienthi=1 and type='chinhsach' ";
$d->query($sql);
$dschinhsach=$d->result_array();  

if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
	remove_product($_REQUEST['pid'],$_REQUEST['size'],$_REQUEST['mausac']);
}
else if($_REQUEST['command']=='clear'){
	unset($_SESSION['cart']);
}
else if($_REQUEST['command']=='update'){
	$max=count($_SESSION['cart']);
	for($i=0;$i<$max;$i++){
		$pid=$_SESSION['cart'][$i]['productid'];
		$size=$_SESSION['cart'][$i]['size'];
		$mausac=$_SESSION['cart'][$i]['mausac'];
		$q=intval($_REQUEST['product'.$pid.$size.$mausac]);

		if($q>0 && $q<=99999){
			$_SESSION['cart'][$i]['qty']=$q;
		}
		else{
			$msg='Some proudcts not updated!, quantity must be a number between 1 and 99999';
		}
	}
}
?>
<script type="text/javascript">
	function del(pid,size,mausac){
		if(confirm('Bạn muốn xóa sản phẩm này ra khỏi giỏ hàng ?')){
			document.form2.pid.value=pid;
			document.form2.size.value=size;
			document.form2.mausac.value=mausac;
			document.form2.command.value='delete';
			document.form2.submit();
		}
	}

</script>
<script type='text/javascript' src='js/flags.js'></script>
<script type="text/javascript">     
         function GoogleLanguageTranslatorInit() { 
         new google.translate.TranslateElement({pageLanguage: 'vi', autoDisplay: false }, 'google_language_translator');}
              </script><script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit"></script>
<style type="text/css">
	
	#google_language_translator { width:auto !important; }

	#google_language_translator { clear:both; width:auto !important; text-align:right; display:none; }
    		
</style> 
<nav id="menu">
	<a id="hamburger-icon" title="Menu">
		<span class="line line-1"></span>
		<span class="line line-2"></span>
		<span class="line line-3"></span>
	</a>
	<div class="col_w20">
		<a href=".">
			<img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" />
		</a>
	</div>
	<div class="col_w60">
		<ul class="list_menu">

			<li ><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html">
			Signature by Khánh Gia Apartment</a></li>

			<li ><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html">
			Giới thiệu</a></li>

			<li>
				<a>Translate</a>
				<ul>
					<li>
						<a href="" onclick="doGoogleLanguageTranslator('vi|vi'); return false;" title="Việt Nam" class="flag"><img src="images/vn.png" border="0" />Tiếng Việt</a>
					</li>
					<li><a href="" onclick="doGoogleLanguageTranslator('vi|en'); return false;" title="English" class="flag"><img src="images/us.png" border="0" />English</a>
					</li>
					<div id="google_language_translator"></div>
				</ul>
			</li>


		</ul>
	</div>
	<div class="wp_button">
		<a href="lien-he.html">
			<button>Tìm phòng</button>
		</a>
	</div> 
</nav>

