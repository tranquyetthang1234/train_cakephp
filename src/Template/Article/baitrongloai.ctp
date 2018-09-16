<div id="baitrongloai">
<h3><?=$tenloai?></h3>
<!-- <ul id="thanhphantrang">
<?php
echo $this->Paginator->first('<<');
echo $this->Paginator->prev('<');
echo $this->Paginator->numbers(array('modulus'=>4));
echo $this->Paginator->next('>');
echo $this->Paginator->last('>>');
?>
</ul> -->

<?php foreach($btl as $row){ ?>
<div class="motbai">
<?php echo $this->Html->Image($row['urlhinh'],array('align'=>'left'));?>
<h4><a href="<?= $this->Url->build('/article/b/')?><?=$row['idbv']?>"><?=$row['tieude']?></a>
</h4>
<div class="xem">
    Xem: <?=$row['solanxem']?> . 
    Ngày: <?=date('d/m/Y',strtotime($row['ngay']))?>
</div>
<p class="tomtat"><?=$row['tomtat']?></p>
</div>
<?php } ?>
</div>
