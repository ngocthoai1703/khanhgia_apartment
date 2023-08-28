<?php 	

$d->reset();

$sql_slider_banner = "select ten$lang as ten,link,photo from #_slider where  type='banner_product' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$slider_banner=$d->fetch_array();

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider' and hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$slider=$d->fetch_array();

?>
<input type="hidden" value="1" class="soluong"  />
<div id="wapper">
      <div id="slider">
        <?php include _template."layout/slider.php";?>
      </div>    
<div class="box_container">

	<div id="col_right" class="mh-600">
		<div class="district">
			<h1>Chi Nhánh</h1>
			<div class="dm_district">
				<li><a href="san-pham.html">Tất cả</a></li>
			<?php for($i = 0; $i < count($p_danhmuc); $i++){ 
				$d->reset();
				$sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
				$d->query($sql_dvquan);
				$p_list=$d->result_array();
			?>
				<li><a href="san-pham/<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a></li>
			<?php } ?>
			</div>
		</div>
		<div class="wp_product inside">
			<?php
			foreach($product as $k => $value){
				$d->reset();
				$sql = "select id,ten$lang as ten,thumb,photo FROM #_hinhanh where id_hinhanh='".$value['id']."' and type='sanpham' limit 0,1";
				$d->query($sql);
				$hinhthemsp = $d->fetch_array();
				?>	
				<div class="product__item">
					<a href="<?=$com?>/<?=$value['tenkhongdau']?>.html" class="product__image1">
						<img class="img" src="images/loading.gif" data-src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>">
					</a>
					<div class="product__name1">
					<a href="<?=$com?>/<?=$value['tenkhongdau']?>.html">
						<?=$value['ten']?>
					</a>
					<p href="<?=$com?>/<?=$value['tenkhongdau']?>.html">
						<?=$value['giacu']?>
					</p>
				</div>
					<div class="product__price1">
						<div class="product__price2">
							<p>Giá phòng : </p> 
							<p>	<b>từ 
								<?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đồng/đêm';else echo _lienhegia; ?></b></p>
							</div>
					<a  href="san-pham/<?=$value['tenkhongdau']?>.html">Xem phòng</a>
					</div>
				</div>
			<?php } ?>

			<div class="clear"></div>

		</div>
		<div id="load_more">Xem thêm</div>
		<div id="slider">
        <?php include _template."layout/tienich.php";?>
      </div> 
		<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
	</div>
	<div class="clear"></div>
</div>
</div>

<script type="text/javascript">
	let loadMoreBtn = document.querySelector('#load_more');
	let currentItem = 4;

	loadMoreBtn.onclick = () =>{
		let boxes = [...document.querySelectorAll('.wp_product.inside .product__item')];
		for (var i = currentItem; i < currentItem + 4 ; i++){
			boxes[i].style.display = 'inline-block';
		}
		currentItem += 4
		if (currentItem >= boxes.length){
			loadMoreBtn.style.display = 'none';
		}
	}

</script>






