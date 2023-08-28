<?php
$d->reset();
$sql="select noidung$lang as noidung from #_about where type='lienhe'";
$d->query($sql);
$lienhe=$d->fetch_array();

$d->reset();
$sql2="select tenen from #_news_danhmuc where type='chinhanh' and hienthi=1 ";
$d->query($sql2);
$dschinhanhcontact=$d->result_array();


$sql = "select * from #_product where type='sanpham' and hienthi=1 order by stt,id desc";
$d->query($sql);
$s_product = $d->result_array();



?>

<div class="box_container">
	
	<div id="wp_contact" class="mh-600">
		<div id="slider">
        <?php include _template."layout/brands.php";?>
      </div>
      <div class="content_contact">
		<div class="tt_lh">
			<p>Trang chủ > <b>Chi nhánh Khánh Gia Apartment</b></p>
			<h3 class="title">Khánh Gia Apartment</h3>
			<span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				width="27" height="21"
				viewBox="0 0 384 512"
				style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg><?=$company['diachi']?></span>
			<p class="description"><?=$company['description'];?></p>
				
		</div>
		<div class="map">	
			<?=$company['map'];?>
		</div>
	</div>
		<div id="slider">
        <?php include _template."layout/tienich.php";?>
      </div> 
      <div class="chose_phong">
      	<div class="district">
			<h1>Chi Nhánh</h1>
			<div class="dm_district">
				<li><a href="">Chọn phòng</a></li>
				<li><a href="">Không gian</a></li>
				<li><a href="">Chi nhánh</a></li>
			</div>
		</div>
		<div class="bo">
		<div class="title1">
			<div class="title2">
                    <h3><b><?=count($s_product);?> Lựa chọn phòng</b> cho bạn</h3>
				<div class="title3">
					<button>
						 <input class="check_in" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>">
			 			 <input class="check_in" type="date" id="birthday" value="<?php echo date('Y-m-d'); ?>">
					</button>
					<button>
						<span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				            width="19" height="19"
				            style=" fill:#545454; margin-bottom: -2px; margin-left: 5px;" viewBox="0 0 448 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#545454"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></span>
				  		<select class="people" value="khách">
							<option value="quan1">Người Lớn</option>
							<option value="quan1">Trẻ Em</option>
							<option value="quan1">Em bé</option>
						</select>
		                  
		                  <input class="num" type="number" name="soluong" min="1" value="1">
		                  
					</button>
				</div>

			</div>
			<div class="sap_xep1">
					<div class="sap_xep2">
						<p>Sắp xếp theo </p>
						<select name="sort_price">
							<option >Giá thấp lên cao</option>
							<option >Giá cao xuống thấp</option>
							
						</select>
					</div>
					<div class="huy_phong">
						<p>Hủy phòng</p>
						<h3>MIỄN PHÍ tối đa 3 ngày trước ngày nhận phòng</h3>
					</div>
				</div>
			
		</div>
		<div class="wp_product2">
			<?php foreach($s_product as $k => $value){ ?>	
				<div class="product__item2">
					<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="product__image2">
						<img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>">
					</a>
					<div class="product_info2">
						
						<div class="product__name2">
							<a href="san-pham/<?=$value['tenkhongdau']?>.html" >
								<?=$value['ten']?>
							</a>
							<p class="ma_sp"><?=$value['masp']?></p>
		                </div>
		                <div class="wap_detail">
		                <div class="tien_ich_sp2">
		                	<?php if($value['mausac'] != '') { ?>
				                  <?php $arr_mausac = explode(',',$value['mausac']);
				                  foreach($arr_mausac as $key=>$value2)
				                  {
				                    echo '<span value="'.$value2.'" class="mausac1"><svg xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
							            width="20" height="26"
							            style=" fill:#14425B; " viewBox="0 0 576 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#14425B"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
				                    <p>'.$value2.'</p></span>';
				                  }

				                  ?>
				              <?php } ?>
				          </div>
				      
				          <div class="btn_dathang2">
					          <div class="size_sp2">
									<p>Diện tích</p> 
									<p><b><?=$value['size']?></b></p>
				                	
									<p>Giá thuê<p>
										<b>Từ 
										<?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đồng / đêm';else echo _lienhegia; ?></b></p>
									</p>
									<p>Phòng sẵn sàng <p><b>Có thể thuê ngay</b></p>
										
									</p>
								</div>
							<a href="san-pham/<?=$value['tenkhongdau']?>.html">Chọn phòng</a>
						</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
	</div>
      </div>
		</div>

	</div><!--.content--> 

</div><!--.box_container--> 