<!DOCTYPE html>
<html lang="es-MX">
	<head>
        <?=$this->html->charsetTag("UTF-8"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?=$title_for_layout; ?></title>
		<meta name="description" content="<?=$meta_description;?>" />
		<meta name="keywords" content="<?=$meta_keywords;?>" />
		<meta name="viewport" content="width=device-width">
		<!-- <link rel="shortcut icon" href="<?=Path_img.'/cursor.png'?>">-->
		<meta name="author" content="Saul Flores, CINCO" />
		<?php echo $this->html->includeCss("bootstrap.min"); ?>
		<?php echo $this->html->includeCss("font-awesome.min"); ?>
		<?php echo $this->html->includeCss("style"); ?>		
		<?php echo $this->html->includeJs("jquery-2.2.0.min");?>
		<?php echo $this->html->includeJs("bootstrap.min");?>
		<?php echo $this->html->includeJs("script");?>
		<?php echo $this->html->includeCss("plugins/animations"); ?>
		<?php echo "<script> Path = '".Path."'; </script>"; ?>
	</head>
	<body id="<?php echo $controllerName; ?>" class="<?=$function;?>">
		
	<?=$this->renderElement("header")?>
		<div class="wrapper "><?php echo $content_for_layout ?></div>
	<?=$this->renderElement("footer");?>
		<div class="modal fade" id="detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"></div></div></div>
		
		<?php if(isset($_SESSION["msj"])){ ?>
			<script>alert('<?=$_SESSION["msj"]?>');</script>
		<?php unset($_SESSION["msj"]); } ?>
		
	</body>
</html>
<?php echo $this->html->includeJs("plugins/css3-animate-it");?>