<!DOCTYPE html> <html>
<head> 	<?php echo $this->Html->charset(); ?>
	<title> 
	<?php // echo $title_for_layout; ?> 
	<?php echo $this->fetch('title'); ?>
   
	</title>
   <?php echo $this->Html->css('main'); ?>
</head>
<body>
<div id="container">
   <div id="header">  ádsad</div>
   <div id="menungang"><?php echo $this->element('menu');?>  </div>
    <?php if ($this->request->action=="index") {?>
	<div id="content1"><?php echo $this->element('bainoibat');?>  </div>
   <div id="info">  </div>
   <div id="content2">  </div>  
   <?php } //if?>  
   <div id="content3"><?php echo $this->element('bando');?>  </div>
   <div id="quangcao">  </div>
   <div id="content4"><?php echo $this->fetch('content'); ?> </div>   
   <div id="footer">  </div>
   </div> <!--container-->
   </body></html>
