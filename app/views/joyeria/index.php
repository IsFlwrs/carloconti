<?php echo $this->html->includeJs("plugins/swiper.min");?>
<?php echo $this->html->includeCss("plugins/swiper.min");?>
<?php echo $this->html->includeCss("joyeria/index");?>
<?php echo $this->html->includeJs("joyeria/index");?>
	<?php
 //productos 
 $productos = array();
 $productos[] = "joyeria10.jpg";
 $productos[] = "joyeria11.jpg";
 $productos[] = "joyeria12.jpg";
 $productos[] = "joyeria13.jpg";
 $productos[] = "joyeria14.jpg";
 $productos[] = "joyeria15.jpg";

 
 //no modificar
 $clases = array();
 foreach ($productos as $key => $value) {
     $clases[$key] = substr($value, 0, -4);
 }
 $contador = 1;
?>
<article class="container text-center animatedParent" data-sequence="500">
	<header class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" delay="500"> 
		<h1>JOYERÍA</h1>
		<p>
			Cada pieza está diseñada de forma personalizada, tomando en cuenta las expectativas y deseos del cliente. Conoce algunas de nuestras piezas distintivas.
		</p>
		<img class="effects" src="<?=Path_img.'/effects/shadow1.png'?>" /> 
	</header>
	<div class="col-xs-12 cont animated fadeIn" data-id="<?=$contador++?>">
		<div class="img-selected <?=$clases[0]?>" nameClass="<?=$clases[0]?>"></div>
	</div>
	<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>">
		<img class="effects" src="<?=Path_img.'/effects/shadow2.png'?>" />
		<!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
        	<?php foreach ($productos as $key => $value) { ?>
				<div class="swiper-slide <?=$clases[$key]?> " nameClass="<?=$clases[$key]?>" ></div>
			<?php }	?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
	</div>
</article>
<style>
<?php foreach ($clases as $key => $value) { ?>
	.<?=$value?>{
		background: url(<?=Path_img.'/productos/'.$productos[$key]?>) no-repeat;
		background-size: contain;
		background-position: center center;
	}
<?php } ?>
</style>