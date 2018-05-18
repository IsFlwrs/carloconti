<header class="header ">
	<nav class="container text-center">
		<div class="col-md-2 col-md-push-5 bread">
			<a class="link" href="<?=Path?>"> <img class="" src="<?=Path_img.'/assets/logo.png'?>" alt="Carlo Conti" title="Carlo Conti" /> </a>
		</div>
		<div class="ico-menu">
			<img src="<?=Path_img.'/assets/menu.png'?>" />
		</div>
		<div class="menu-list">
			<div class="col-md-5 col-md-pull-2 col-xs-12 menu add">
				<div class="col-md-6 col-xs-12 <?php if($controllerName == 'joyeria') echo 'active'; ?>">
					<a class="link" href="<?=Path.'/joyeria'?>">JOYERÍA</a>
				</div>
				<div class="col-md-6 col-xs-12 <?php if($controllerName == 'quehacemos') echo 'active'; ?>">
					<a class="link" href="<?=Path.'/quehacemos'?>">QUÉ HACEMOS</a>
				</div>
			</div>
			<div class="col-md-5 col-xs-12 menu">
				<div class="col-md-6 col-xs-12 <?php if($controllerName == 'visitanos') echo 'active'; ?>">
					<a class="link" href="<?=Path.'/visitanos'?>">VISÍTANOS</a>
				</div>
				<div class="col-md-6 col-xs-12 <?php if($controllerName == 'cotiza') echo 'active'; ?>">
					<a class="link" href="<?=Path.'/cotiza'?>">COTIZA</a>
				</div>
			</div>
		</div>
	</nav>
</header>