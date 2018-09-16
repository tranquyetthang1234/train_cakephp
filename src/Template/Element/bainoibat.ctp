<div id="bainoibat">
<div id="top1"> 
	<?php $row=$bainb[0]; ?>
	<?=$this->Html->image($row['urlhinh'], array('align'=>'left')); ?>
	<div class="tieude"> <a href="#"><?=$row['tieude'];?></a> </div>
	<div class="tomtat"><?=$row['tomtat'];?></div>
</div>
<div id="top3">
<?php for($i=1;$i<count($bainb);$i++){ $row = $bainb[$i]; ?>
<div>
<?php if ($row['urlhinh']!='') echo $this->Html->image($row['urlhinh']); ?>
<br/> <a href="#"><?=$row['tieude']?></a>
</div>	
<?php } //for $i?>
</div>
</div>
