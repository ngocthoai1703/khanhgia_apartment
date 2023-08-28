
<?php 

$d->reset();

$sql_slider_banner = "select * from #_background where  type='watermark' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$watermark=$d->fetch_array();
?>
<div class="box_container tips">
		<div class="watermark">
            <img class="watermark" src="<?=_upload_hinhanh_l.$watermark['photo']?>" alt="watermark">
        </div>
<div class="box_container tips">

