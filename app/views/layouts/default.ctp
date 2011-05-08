<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Loffelmacher.com - <?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<header></header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<footer></footer>
	</div>
</body>
</html>