<?php

$d->reset();

$sql="select ten$lang as ten,tenkhongdau,id,thumb,noibat from #_product_danhmuc where hienthi=1 and noibat=0 and type='sanpham' order by stt,id desc";

$d->query($sql);

$p_danhmuc=$d->result_array();	

$d->reset();
$sql_memories="select ten$lang as ten,tenkhongdau,id,thumb from #_news where hienthi=1 and type='memories' order by stt,id desc ";
$d->query($sql_memories);
$memories=$d->result_array();  

?>

<a href=".">

	<img class="logo" src="thumb/120x120/2/<?=_upload_hinhanh_l.$row_logo['photo']?>" />

</a>

<ul class="list_menu">

	<li>
		<a href=".">Trang chủ</a>
	</li>
	
	<li>

		<a href="javascript:avoid()">Sản phẩm</a>

		<ul class="dm_cap1">

			<li><a href="san-pham.html">Tất cả sản phẩm</a></li>

			<?php 

			for($i = 0; $i < count($p_danhmuc); $i++){ 

				$d->reset();

				$sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";

				$d->query($sql_dvquan);

				$p_list=$d->result_array();

				?>

				<li>

					<a href="san-pham/<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a>
					<?php if(count($p_list)>0) { ?>

						<ul class="dm_cap2">

							<?php for($j=0;$j<count($p_list);$j++) { ?>

								<li><a href="san-pham/<?=$p_list[$j]['id']?>/<?=$p_list[$j]['tenkhongdau']?>/"><?=$p_list[$j]['ten']?></a></li>

							<?php } ?>

						</ul>

					<?php } ?>   
				</li>

			<?php } ?>

		</ul>

		<div class="circle-plus closed">

			<div class="circle">

				<div class="horizontal"></div>

				<div class="vertical"></div>

			</div>

		</div>

	</li>
	<li>
		<a href="san-pham-moi.html">Hàng mới về</a>
	</li>
	<li>

		<a href="san-pham-khuyen-mai.html">Hàng Sale</a>

	</li>
	<li>
		<a href="lien-he.html">Liên hệ</a>
	</li>
	<li>
		<a href="cau-hoi-thuong-gap.html">Câu hỏi thường gặp</a>
	</li>
	<?php if($deviceType == 'phone'){ ?> 
		<li>
			<div class="search">
				<input type="text" onkeypress="doEnter(event,'keyword');" name="keyword" id="keyword" placeholder="Tìm kiếm..." value="<?=@$tukhoa?>" >
				<p class="btn_search" aria-hidden="true" 
				title="<?=_search?>" onclick="onSearch(event,'keyword');" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				width="26" height="26"
				viewBox="0 0 172 172"
				style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M73.45833,21.5c-28.63214,0 -51.95833,23.32621 -51.95833,51.95833c0,28.63212 23.32619,51.95833 51.95833,51.95833c12.38529,0 23.77079,-4.37509 32.71191,-11.64583l35.15446,35.15446c1.34815,1.40412 3.35005,1.96971 5.23364,1.47866c1.88359,-0.49105 3.35456,-1.96202 3.84561,-3.84561c0.49105,-1.88359 -0.07455,-3.88549 -1.47866,-5.23364l-35.15446,-35.15446c7.27074,-8.94112 11.64583,-20.32663 11.64583,-32.71191c0,-28.63212 -23.32619,-51.95833 -51.95833,-51.95833zM73.45833,32.25c22.82242,0 41.20833,18.38593 41.20833,41.20833c0,11.11769 -4.38529,21.16215 -11.49886,28.56169c-0.43849,0.32229 -0.8255,0.7093 -1.14779,1.14779c-7.39953,7.11357 -17.44399,11.49886 -28.56169,11.49886c-22.82242,0 -41.20833,-18.38593 -41.20833,-41.20833c0,-22.8224 18.38591,-41.20833 41.20833,-41.20833z"></path></g></g></svg></p>
			</div>
		</li>
	<?php } ?>
</ul>

<span class="close_menu">

	<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"

	width="30" height="30"

	viewBox="0 0 172 172"

	style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M30.96,13.76c-9.45834,0 -17.2,7.74166 -17.2,17.2v110.08c0,9.45834 7.74166,17.2 17.2,17.2h110.08c9.45834,0 17.2,-7.74166 17.2,-17.2v-110.08c0,-9.45834 -7.74166,-17.2 -17.2,-17.2zM30.96,20.64h110.08c5.73958,0 10.32,4.58042 10.32,10.32v110.08c0,5.73958 -4.58042,10.32 -10.32,10.32h-110.08c-5.73958,0 -10.32,-4.58042 -10.32,-10.32v-110.08c0,-5.73958 4.58042,-10.32 10.32,-10.32zM57.47219,52.60781l-4.86437,4.86437l28.52781,28.52781l-28.52781,28.52781l4.86437,4.86437l28.52781,-28.52781l28.52781,28.52781l4.86437,-4.86437l-28.52781,-28.52781l28.52781,-28.52781l-4.86437,-4.86437l-28.52781,28.52781z"></path></g></g></svg>

</span>