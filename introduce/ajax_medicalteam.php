<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
$sql = " select * from ".$site_prefix."board_medicalteam where BoardIdx = '".$idx."' ";
$row = sql_fetch($sql);
$row["files"] = get_file($site_prefix."board_medicalteam", $idx);
if($row["files"][1]["file_source"]){
	$img = "<img src='".$row["files"][1]["path"]."/".$row["files"][1]["file_source"]."' width='241' height='256' />";
} else {
	$img = "<img src='/images/introduce/modal_noimg.jpg' width='241' height='256' />";
}
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span><img src="/images/introduce/close.png" alt="닫기"></span>
	</button>
	<h1>의료진 소개</h1>
</div>
<figure>
	<?=$img?>
	<figcaption>
		<dl>
			<dt><?=$row["Title"]?></dt>
			<dd><?=$row["bd1"]?></dd>
		</dl>
	</figcaption>
</figure>
<div class="staff-history">
	<ul class="arrow-list">
		<?
		echo "<li>";
		echo $row["Content"] = preg_replace("/\<br \/\>/i","</li><li>",nl2br($row["Content"]));
		echo "</li>";
		?>
	</ul>
</div>