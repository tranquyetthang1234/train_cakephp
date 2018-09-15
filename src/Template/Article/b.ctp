<div id="baiviet_ct">
<h4  class="tieude"><a href="#"><?=$row[0]["tieude"]?></a></h4>
<div class="xem">Số lần xem: <?=$row[0]["solanxem"]?>. 
Ngày đăng: <?=date('d/m/Y',strtotime($row[0]["ngay"]))?>
</div>
<div class="tomtat"><?=$row[0]["tomtat"]?></div> <hr>
<div id="content"><?=$row[0]["content"]?></div>
</div
