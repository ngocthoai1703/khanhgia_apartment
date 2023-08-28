<?php 
$d->reset();
$sql_sizechart = "select photo from #_background where type='sizechart' limit 0,1";
$d->query($sql_sizechart); 
$size_chart = $d->fetch_array();

$d->reset();
$sql_chinhsach_sanpham = "select noidung from #_about where type='chinhsach_sanpham'";
$d->query($sql_chinhsach_sanpham); 
$chinhsach_sanpham = $d->fetch_array();
?>
<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<!--Tags sản phẩm-->
<link href="css/tab.css" type="text/css" rel="stylesheet" />

<div class="box_container">
  <div class="content">
    <div id="col_left">
      <?php include _template."layout/left.php";?>
    </div>
    <div id="col_right">
      <div class="zoom_slick">
        <div class="slick2">                
          <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>">
            <img class='cloudzoom' src="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" /></a>

            <?php $count=count($hinhthem); if($count>0) {?>
              <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>" >
                  <img src="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></a>  
                <?php }} ?>
              </div><!--.slick-->


              <?php $count=count($hinhthem); if($count>0) {?>
                <div class="slick">                
                  <p><img src="<?=_upload_sanpham_l.$row_detail['thumb']?>" /></p>
                  <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                    <p><img src="<?=_upload_hinhthem_l.$hinhthem[$j]['thumb']?>" /></p>
                  <?php } ?>
                </div><!--.slick-->
              <?php } ?>

              <div class="tt_lh">
                <p>Trang chủ > Chi nhánh Khánh Gia Apartment > <b><?=$row_detail['ten']?></b></p>
                <h3 class="title2"><?=$row_detail['ten']?></h3>
                <a><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="19" height="19"
                  viewBox="0 0 384 512"
                  style=" fill:#000000; margin-right: 5px; margin-bottom: -2px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg><?=$row_detail['giacu']?></a>
                  <div class="detail_sp">
                      <p><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                  width="17" height="17"
                                  viewBox="0 0 512 512"
                                  style=" fill:#15445E; margin-bottom: -3px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#15445E"><path d="M160 288h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56v-64h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56V96h-56c-4.42 0-8-3.58-8-8V72c0-4.42 3.58-8 8-8h56V32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v448c0 2.77.91 5.24 1.57 7.8L160 329.38V288zm320 64h-32v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-41.37L24.2 510.43c2.56.66 5.04 1.57 7.8 1.57h448c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32z"/></svg> Diện tích <?=$row_detail['size']?></p>
                      <?php if($row_detail['masp'] != '') { ?>
                         <p><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                  width="22" height="22"
                                  viewBox="0 0 640 512"
                                  style=" fill:#15445E;margin-bottom: -5px"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#15445E">><path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg>
                          <?=$row_detail['masp']?> </p>';
                      <?php } ?> 
                  </div>
                  <a>
                     <?php if($row_detail['noidung']!=''){ ?> 
                              <?=$row_detail['noidung']?>
                        <?php } ?>
                    </a>
              </div>


            </div>


            <div id="wp_product_info">
              <div class="map1"> 
                  <?=$company['map'];?>
                </div>
              <div class="booking">
                    <div class="ten1">
                      <div class="ten2">
                      <li>
                          <b><?=$row_detail['ten']?></b>
                        </li>
                         <li class="gia"><p></p><span ><?=number_format($row_detail['gia'],0, ',', '.').'đ/đêm';?></span>
                         </li>
                      </div>
                      <div class="ten3">
                        <span ><b><?=number_format($row_detail['gia'],0, ',', '.').'đ';?></b></span><p>1 đêm</p>
                      </div>
                    </div>
                    <div class="booking_detail">
                      <button>
                          <b>Nhận phòng</b>
                          <input class="check_in1" type="date1" id="birthday" value="<?php echo date('Y-m-d'); ?>">
                      </button>
                      <button class="border_booking">
                          <b>Trả phòng</b>
                          <input class="check_out1" type="date1" id="birthday" value="<?php echo date('Y-m-d'); ?>">
                      </button>
                      <button>
                          <b>Khách</b>
                          <input class="soluong" min="1" name="soluong" value="1" type="number">
                      </button>
                    </div> 
                    <button><a class="dathang btn-addcart" data-id="<?=$row_detail['id']?>" > ĐẶT PHÒNG NGAY </a></button>
                    
                    <i>Bạn vẫn chưa bị trừ tiền</i>
              </div>
          </div>
        </div>
        <div class="clear"></div>  
      </div><!--.wap_pro-->

      <h3 class="title3">Tiện ích</h3>
      <div class="tien_ich">
        <?php if($row_detail['mausac'] != '') { ?>
            <?php $arr_mausac = explode(',',$row_detail['mausac']);
            foreach($arr_mausac as $key=>$value)
            {
              echo '<span value="'.$value.'" class="mausac3"><svg xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
            width="45" height="45"
            style=" fill:#14425B; margin-top: -15px; margin-right:13px;" viewBox="0 0 576 512"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#14425B"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
              '.$value.'</span>';
            }

            ?>
        <?php } ?>
    </div>
      <div id="related_product">

        <h3 class="title3">Các lựa chọn khác</h3>
        <div class="slick_product1">
          <?php foreach ($product as $key => $value) { ?>
                    <div class="product__item2">
          <a href="san-pham/<?=$value['tenkhongdau']?>.html" class="product__image2">
            <img class="img" src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>">
          </a>
          <div class="product_info2">
            
            <div class="product__name2">
              <a href="san-pham/<?=$value['tenkhongdau']?>.html" >
                <?=$value['ten']?>
              </a>
              <p class="ma_sp"><?=$value['masp']?>
                      </p>
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
        </div>
      </div>

     
    </div>
