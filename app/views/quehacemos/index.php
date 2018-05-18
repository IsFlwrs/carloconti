<?php echo $this->html->includeCss("quehacemos/index");?>
<?php echo $this->html->includeJs("quehacemos/index");?>
<?php $contador = 1; ?>
<section class="container text-center animatedParent" data-sequence="500">
	<header class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" delay="500" > 
		<h1>¿QUÉ HACEMOS?</h1>
		<img class="effects" src="<?=Path_img.'/effects/shadow1.png'?>" /> 
	</header>
	<div class="col-md-10 col-md-offset-1 col-xs-12 cont">
		<article class="col-md-6 col-md-push-6  col-xs-12 animated fadeIn" data-id="<?=$contador++?>">
			<img class="img-responsive" src="<?=Path_img.'/assets/quehacemos.png'?>" />
		</article>
		<article class="col-md-6 col-md-pull-6  col-xs-12 text-justify padre">
			<div class="hijo">
				<p class="animated fadeIn" data-id="<?=$contador++?>">
					En Carlo Conti nos encargamos de diseñar, personalizar y fabricar anillos de compromiso y argollas matrimoniales.
					Piezas finas, elegantes , artesanales fabricadas a mano por expertos joyeros.
					Diamantes certificados y montados en oro de 14 k 18 k o platino.
				</p>
			</div>
		</article>
	</div>
	<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>">
		<img class="effects" src="<?=Path_img.'/effects/shadow2.png'?>" />
	</div>
</section>