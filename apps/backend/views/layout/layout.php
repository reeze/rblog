<html>
<head>
	<title><?php isset($title) ? print($title) : print("Reeze") ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<?php include_javascripts('default', 'jquery'); ?>
	<?php include_stylesheets('rt'); ?>
</head>
<body>
	<div id="wrapper">
		<div id="main">
			<div id="header">
				<h1>Administration</h1>
				<?php include_partial('layout/navor');?>
			</div>
			<?php
				if($rt_flash->has('notice'))
				{
					echo "<div id='notice'>" . $rt_flash->get('notice') . "</div>";
				}
			?>
	
			<div id="main-content" class="clearfix">
				<div id="content"><?php echo $rt_layout_content; ?></div>
				<?php include_partial('layout/sidebar'); ?>
			</div>
		</div>
		<?php include_partial('layout/footer'); ?>
	</div>
</body>
</html>
