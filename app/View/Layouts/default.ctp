<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Soluciones de Calidad
	</title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->css('simple-sidebar');
                echo $this->Html->css('bootstrap');
                echo $this->Html->css('font-awesome');
                echo $this->Html->script('ajaxboostrap3');
                echo $this->Html->script('bootstrap');
                echo $this->Html->script('jquery');
                //echo $this->Html->script('ee1deeef0a.js');
                
        ?>
    <!--<script src="https://use.fontawesome.com/ee1deeef0a.js"></script>
    <link href="../../webroot/css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>
   
	<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
	
                    </body>
                    <?php //echo $this->element('sql_dump'); ?>
</html>
<script>
 $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
