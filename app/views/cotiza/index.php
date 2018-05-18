<?php echo $this->html->includeCss("cotiza/index");?>
<?php echo $this->html->includeJs("cotiza/index");?>
<?php $contador = 1; ?>
<section class="container text-center animatedParent" data-sequence="500" >
	<header class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" > 
		<h1>COTIZA</h1>
		<img class="effects" src="<?=Path_img.'/effects/shadow1.png'?>" /> 
	</header>
	<div class="col-md-10 col-md-offset-1 col-xs-12 cont">
		<article class="col-md-6 col-xs-12 animated fadeIn" data-id="<?=$contador++?>" delay="500" >
			<img class="img-responsive" src="<?=Path_img.'/assets/cotiza.png'?>" />
		</article>
		<article class="col-md-6 col-xs-12 text-justify padre">
			<div class="hijo">
				<form method="post">
					<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" >
						<input type="text" name="name" placeholder="NOMBRE *" required="" />
					</div>
					<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" >
						<input type="email" name="email" placeholder="EMAIL *" required="" />
					</div>
					<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" >
						<textarea name="msj" placeholder="Mensaje..." required rows="5"></textarea>
					</div>
					<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>" >
						<button type="submit">ENVIAR</button>
					</div>
				</form>
			</div>
		</article>
	</div>
	<div class="col-xs-12 animated fadeIn" data-id="<?=$contador++?>">
		<img class="effects" src="<?=Path_img.'/effects/shadow2.png'?>" />
	</div>
</section>