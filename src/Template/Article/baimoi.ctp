<div id="baimoi">
<?php foreach($lt as $row){ ?>
<div class="rows">
<h4 class=loaitin> <a href="<?= $this->Url->build('/article/baitrongloai/')?><?=$row['idloai']?>"> <?=$row['tenloai']?> </a> </h4>	
<?php	
	$baimoitl=$bv->find()
	->select(['idbv','tieude','tomtat','urlhinh'])
	->where(array('anhien' => 1,'idloai'=>$row['idloai']))->limit(1)->first()
	;	
	
	
	?>
	
<div class="tindau"> 
 <?php echo $this->Html->Image($baimoitl['urlhinh'],array('align'=>'left'));?>
		<div class="tieude"> <a href="<?= $this->Url->build('/article/b/')?><?=$baimoitl['idbv']?>"><?=$baimoitl['tieude'];?></a> </div>
		<div class="tomtat"><?=$baimoitl['tomtat'];?></div>
</div>

<?php	
	$baimoitl2=$bv->find()
	->select(['idbv','tieude','tomtat','urlhinh'])
	->where(array('anhien' => 1,'idloai'=>$row['idloai']))->limit(4)->offset(1)
	;
	$c= $baimoitl2->toArray();

	?>
<div class="tintieptheo">
	 <?php foreach($c as $row ) {?>	
	<p class="tieude"> <a href="#"><?=$row['tieude']?> </a> </p>
	<?php } //for $j?> 

</div>


</div>
<?php } //foreach?>
</div>
