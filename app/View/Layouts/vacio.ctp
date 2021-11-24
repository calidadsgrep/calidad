<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Soluciones de calidad
	</title>
	
    
</head>
<body>
	<div id="container">
		<div id="header">
			<h1></h1>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
                    
		<div id="footer">
			<?php 
			?>
			<p>
				
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
