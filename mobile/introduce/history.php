<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');
if(!$hcat) $hcat = "경기도광주성숙기";
?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce yongmun">
		<div class="page-title">
			<h2>
				연혁<br>
				<small>History</small>
			</h2>
		</div>
		<div class="history-list">
			<nav class="tabmenu-wrap">
				<div class="container">
					<ol class="tab-menu">
						<li <?=$hcat=="용문동설립기"?'class="active"':""?>><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("용문동설립기")?>">1952 ~<br>1957</a></li>
						<li <?=$hcat=="신대방동도약기"?'class="active"':""?>><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("신대방동도약기")?>">1957 ~<br>1972</a></li>
						<li <?=$hcat=="봉천동성장기"?'class="active"':""?>><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("봉천동성장기")?>">1972 ~<br>1993</a></li>
						<li <?=$hcat=="경기도광주성숙기"?'class="active"':""?>><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("경기도광주성숙기")?>">1993 ~<br><?=date("Y",time())?></a></li>
					</ol>
				</div>
			</nav>
		</div>
		<section class="yongmun-dong">
			<div class="section-header">
				<img class="img-responsive" src="/mobile/images/introduce/history_img.gif">
				<div class="container">
					<?
					switch($hcat){
						case "용문동설립기":
							echo '<h4>용문동<br><i>설립기</i></h4><h5>1952 ~ 1957</h5>';
							break;
						case "신대방동도약기":
							echo '<h4>신대방동<br><i>도약기</i></h4><h5>1957 ~ 1972</h5>';
							break;
						case "봉천동성장기":
							echo '<h4>봉천동<br><i>성장기</i></h4><h5>1972 ~ 1993</h5>';
							break;
						case "경기도광주성숙기":
							echo '<h4>경기도광주<br><i>성숙기</i></h4><h5>1993 ~ '.date("Y",time()).'</h5>';
							break;
					}
					?>
				</div>
			</div>
			<div class="container">
				<div class="section-content">
					<ol>
						<?
						$sql = " select * from ".$site_prefix."history where hcat = '".$hcat."' order by hyear asc, hmonth asc, hday asc ";
						$result = sql_query($sql);
						for($i=0;$row = sql_fetch_array($result);$i++){
							if($row["hday"]){
								$row["hdate"] = date("Y. m. d",strtotime($row["hyear"]."-".$row["hmonth"]."-".$row["hday"]));
							} else {
								$row["hdate"] = date("Y. m",strtotime($row["hyear"]."-".$row["hmonth"]."-1"));
							}

							$list[$i] = $row;

							if($i > 0 && $list[$i]["hdate"] == $list[$i-1]["hdate"]) $hdate = "&nbsp;";
							else $hdate = $list[$i]["hdate"];
						?>
						<li>
							<dl>
								<dt><?=$row["hdate"]?></dt>
								<dd><?=$row["htext"]?></dd>
							</dl>
						</li>
						<?
						}
						?>
					</ol>
				</div>
			</div>
		</section>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>