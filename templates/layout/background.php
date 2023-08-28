<?php 	

$d->reset();

$sql = "select * from #_anhnen where type='background' limit 0,1";

$d->query($sql);

$background=$d->fetch_array();

?>
<div class="wp_banner">
	<a href="<?=$background['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$background['photo']?>" alt="background"></a>
	<div class="gioi_thieu">
		<a>Giới thiệu về</a>
		<h1><b>Khánh Gia Apartment</b></h1>
		<p>Tọa lạc ngay trung tâm thành phố, trên con đường rợp bóng cây xanh mát của khu vựa quận 3 đông đúc, náo nhiệt, <b>Khánh Gia Apartment</b> mang dáng vẻ sang trọng nhưng vô cùng thoáng đãng, với tòa nhà 7 tầng cùng khoảng sân rộng rãi. Khác với dịch vụ khách sạn, dịch vụ căn hộ Khánh Gia mang đến cho khách hàng sự thân thiện và an toàn như chính ngôi nhà của quý khách</p>
		<br>

		<p>
		Đúng với tên gọi Apartment - Căn hộ tiện ích mang dáng dấp của những chung cư cao cấp với đội ngũ bảo vệ 24/24 và các thiết bị hiện đại trong mỗi căn hộ, <b>Khánh Gia Apartment</b> khiến cho khách hàng dù cư trú ngắn hạn hay dài hạn đều cảm thấy thân thuộc và yên tâm
		</p>
	</div>
</div>
