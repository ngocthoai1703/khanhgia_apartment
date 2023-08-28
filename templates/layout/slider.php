 <?php

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider' and hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$slider=$d->result_array();

$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb,noibat from #_product_danhmuc where hienthi=1 and type='sanpham' order by stt,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();	

?>
<div class="group_booking">
	<div id="slick_slider">
		<?php  for($i=0;$i<count($slider);$i++){ ?>	
			<a target="_blank" href="<?=$slider[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$slider[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" id="wows1_<?=$i+1?>" /></a>
		<?php } ?>
	</div> 
	<div class="kham_pha">
		<button class="khampha">
			Khám phá
		</button>
	</div>
	<div class="group_button">
		<div class="group_button1">
		<span><svg xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
            width="17" height="24"
            style=" fill:#545454; margin:15px 10px;" viewBox="0 0 384 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#545454"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg></span>
		<select class="dm_cap2">
			<?php for($i = 0; $i < count($p_danhmuc); $i++){ 
				$d->reset();
				$sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
				$d->query($sql_dvquan);
				$p_list=$d->result_array();
			?>
				<option>
            <a href="san-pham/<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a></option>
			<?php } ?>
		</select>
			
		</div>
		<div class="group_button1">
		  <input class="check_in" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>">
		  <input class="check_in" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>">

		 </div>
		 <div class="group_button1">
		 <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="19" height="19"
            style=" fill:#545454; margin:18px 10px;" viewBox="0 0 448 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#545454"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></span>
  		<select class="people" value="khách">
			<option value="quan1">Người Lớn</option>
			<option value="quan1">Trẻ Em</option>
			<option value="quan1">Em bé</option>
		</select>
		<input class="num" type="number" name="soluong" min="1" value="1">
		</div>
  		<a href="lien-he.html"  class="submit_booking">Tìm phòng</a>
	</div>
</div>
<!-- <form >
  <input type="date" id="birthday" name="birthday">
  <input type="date" id="birthday" name="birthday">
</form> -->
	





