

<?php 	

$d->reset();

$sql_slider_banner = "select ten$lang as ten,link,photo from #_slider where  type='banner' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$slider_banner=$d->result_array();

$d->reset();

$sql_slider_banner = "select ten$lang as ten,link,photo from #_slider where  type='slider' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$slider_banner2=$d->result_array();

?>
<div class="banner">
		<p>Không gian của <b>Khánh Gia Apartment</b></p>
	    <div class="img_banner">
			<?php  for($i=0;$i<count($slider_banner);$i++){ ?>	
				<a target="_blank" href="<?=$slider_banner[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$slider_banner[$i]['photo']?>" alt="<?=$slider_banner[$i]['ten']?>" id="wows1_<?=$i+1?>" /></a>
			<?php } ?> 
		</div>
</div>
 <div class="dk_ngay">
 	<div class="dk_ngay2">
	 	<h1>Bạn cần chúng tôi giúp đỡ ? </h1>
	 	<a href="dang-ky.html"><span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
		            width="21" height="21"
		            style=" fill:#545454;margin-right: 10px; margin-top: 13px; " viewBox="0 0 640 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#545454"><path d="M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg></span> <p> Đăng ký trải nghiệm </p></a>

	</div>
 </div>


