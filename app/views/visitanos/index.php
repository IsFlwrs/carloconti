<?php echo $this->html->includeCss("visitanos/index");?>
<?php echo $this->html->includeJs("visitanos/index");?>
<?php $contador = 1; ?>
<section class="container text-center animatedParent" data-sequence="500" delay="500">
	<header class="col-xs-12 text-center animated fadeIn" data-id="<?=$contador++?>"> 
		<h1>VISÍTANOS</h1>
		<img class="effects" src="<?=Path_img.'/effects/shadow1.png'?>" /> 
	</header>
	<div class="col-xs-12 cont">
		<article class="col-xs-12 text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1319.7471443552126!2d-103.33996117135892!3d20.677363630211598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1f27aa54707%3A0x42f26fa71f1a3378!2sCarlo+Conti+Diamantes!5e0!3m2!1ses!2smx!4v1492455548626" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<br />
			<address class="animated fadeIn" data-id="<?=$contador++?>" >Calle República 50, Galería Joyera, Local 207</address>
		</article>
	</div>
	<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>">
		<img class="effects" src="<?=Path_img.'/effects/shadow2.png'?>" />
	</div>
</section>