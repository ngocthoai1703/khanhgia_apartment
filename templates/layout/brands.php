

<?php 

$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider2' and hienthi>0 order by stt,id desc limit 1";
$d->query($sql_slider);
$slider2=$d->result_array();
$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider3' and hienthi>0 order by stt,id desc";
$d->query($sql_slider);
$slider3=$d->result_array();
$d->reset();
$sql_slider = "select ten$lang as ten,link,photo from #_slider where  type='slider4' and hienthi>0 order by stt,id desc";
$d->query($sql_slider);
$slider4=$d->result_array();
?>

<div id="collection_index">
  <div class="box_container">
    <div class="image-grid">
      <?php for($i=0;$i<count($slider2);$i++){ ?>
        <img class="image-grid-col-2 image-grid-row-2" src="<?=_upload_hinhanh_l.$slider2[$i]['photo']?>" alt="<?=$slider[$i]['ten']?>" id="wows1_<?=$i+1?>" />
        <div class="collection_detail_btn">
          <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="21" height="21"
                viewBox="0 0 576 512"
                style=" fill:#000000; margin-bottom: -5px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg><a target="_blank" href="<?=$slider2[$i]['link']?>">Thư viện ảnh</a></span>
        </div>
      <?php } ?>
        

        <?php for($i=0;$i<count($slider3);$i++){ ?>
        <img src="<?=_upload_hinhanh_l.$slider3[$i]['photo']?>" alt="<?=$slider3[$i]['ten']?>" id="wows1_<?=$i+1?>" />
        
        <?php } ?>

        <?php for($i=0;$i<count($slider4);$i++){ ?>
        <img src="<?=_upload_hinhanh_l.$slider4[$i]['photo']?>" alt="<?=$slider4[$i]['ten']?>" id="wows1_<?=$i+1?>" />
        
      <?php } ?>

    </div>
  </div>
</div>
