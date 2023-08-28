

<?php 

$d->reset();
$sql="select * from #_product where  type='sanpham' and spmoi>0 and hienthi=1 order by stt asc,id desc";
$d->query($sql);
$spmoi=$d->result_array();
?>
<?php 
// $d->reset();
// $sql="select ten$lang as ten,tenkhongdau,id,thumb from #_product_danhmuc where  type='sanpham' and hienthi=0 order by stt asc,id desc";
// $d->query($sql);
// $danhmuc_nb=$d->result_array();

// if(count($danhmuc_nb)>0) { 
?>
<!--Tags sản phẩm-->

<?php 
// for($i=0;$i<count($danhmuc_nb);$i++) {  
// $d->reset();
// $sql = "select id,ten$lang as ten,tenkhongdau,thumb,photo,masp,gia,giacu FROM #_product where id_danhmuc=".$danhmuc_nb[$i]['id']." and spmoi>0 and type='sanpham' and hienthi=1 order by stt asc,id desc limit 0,12";      
// $d->query($sql);
// $product_moi = $d->result_array();   
?>

<div id="sanpham_noibat" class="vt<?=$i?>">

<div class="box_container">
  
	<div class="tieude_index">
        <a href="">
            <span>SẢN PHẨM MỚI NHẤT</span>
        </a>
        <div class="wap_gachduoi">

            <hr class="gachduoi">
            <hr class="gachduoi2">
        </div>
    </div>

    <div class="slick_product">
    	<?php foreach($spmoi as $k => $value){	?>
    	<div class="product_items">
    		<a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=$value['ten']?>">
    			<img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>" />
    		</a>
    		<h3 class="ten">
    			<a href="san-pham/<?=$value['tenkhongdau']?>.html" title="<?=catchuoi($value['ten'],40);?>">
    				<?=$value['ten']?>
    			</a>
    		</h3>
    		<div class="wap_details">
                <div class="wap_price">
                    <?php if($value['giacu'] >0) { ?> 
                    <p class="sp_giacu"><?php echo number_format($value['giacu'],0, ',', '.');?></p>
                    <?php } ?> 
                   <p class="sp_gia"><span><?php if($value['gia'] != 0)echo number_format($value['gia'],0, ',', '.').' đ';else echo 'Liên hệ'; ?></span></p>
                </div>
                <div class="detail_views">
                    <!-- <div class="detail_desc">
                        <a href="san-pham/<?=$value['tenkhongdau']?>.html">
                            Mua ngay
                        </a>
                    </div> -->
                </div>  
            </div>
    	</div>
    	<?php } ?>

        <div class="clear"></div>
    </div>

    <div class="view_all">
   		<button><a href="san-pham-moi-nhat.html">Xem tất cả</a></button>
    </div>

</div>

</div>
<?php //} ?>


<?php //} ?>
