<?php echo $this->html->includeJs("plugins/swiper.min");?>
<?php echo $this->html->includeCss("plugins/swiper.min");?>
<?php echo $this->html->includeCss("index/index");?>
<?php echo $this->html->includeJs("index/index");?>
<?php
 $contador = 0; 
 $slide = array();
 $slide[$contador]['img'] = "slide2.jpg";
 $slide[$contador++]['txt'] = "";
 
?>
<div class="swiper-container animatedParent">
	<div id="div-slide" class="swiper-wrapper animated fadeIn" delay="750">
		<?php foreach ($slide as $key => $value) { ?>
			<div class="swiper-slide padre text-center" style="background: url(<?=Path_img.'/slides/'.$value['img']?>)">
				<p class="container hijo"><?=$value['txt']?></p>
			</div>
		<?php } ?>		
	</div>
</div>
<style>
	.swiper-slide{
		background-repeat: no-repeat !important;
		background-size: cover !important;
		background-position: center top !important;
	}
</style>