<?php


$d->reset();

$sql2 = "select * from #_product where type='sanpham' and hienthi=1 and tieubieu>0 order by stt,id desc";
$d->query($sql2);
$sale_product = $d->result_array();

$sql = "select * from #_product where type='sanpham' and hienthi=1 and spmoi>0 order by stt,id desc";
$d->query($sql);
$new_product = $d->result_array();
?>
<div id="product_index">
	<div class="box_container">
		<h3 class="title"><b>Lựa chọn phòng</b> cho bạn</h3>
		<div class="wp_product">
			<?php foreach($new_product as $k => $value){ ?>	
				<div class="product__item1">
					<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="product__image">
						<img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>">
					</a>
					<div class="product_info1">
						<div class="product__name">
							<a href="san-pham/<?=$value['tenkhongdau']?>.html" >
								<?=$value['ten']?>
							</a>
							<p class="ma_sp"><?=$value['masp']?>
		                	</p>
		                </div>

		                <div class="tien_ich_sp">
		                	<?php if($value['mausac'] != '') { ?>
				                  <?php $arr_mausac = explode(',',$value['mausac']);
				                  foreach($arr_mausac as $key=>$value2)
				                  {
				                    echo '<span value="'.$value2.'" class="mausac"><svg xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
							            width="20" height="26"
							            style=" fill:#14425B; " viewBox="0 0 576 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#14425B"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
				                    <p>'.$value2.'</p></span>';
				                  }

				                  ?>
				              <?php } ?>
				          </div>
				          <div class="btn_dathang">
					          <div class="size_sp">
									<p>Diện tích <b><?=$value['size']?></b></p>
				                	
									<p>Giá thuê<p>
										<b> 
										<?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đồng / đêm';else echo _lienhegia; ?></b></p>
									</p>
								</div>
								<button><a  href="san-pham.html">Chọn phòng</a></button>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
	</div>
	
</div>