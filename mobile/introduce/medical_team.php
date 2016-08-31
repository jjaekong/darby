<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); 
$sql = " select * from ".$site_prefix."board_setting where BoardName = 'medicalteam' ";
$row = sql_fetch($sql);
$mtAr = explode("|",$row["Category"]);

$sql = $row = "";
?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce medical_team">
		<div class="page-title">
			<h2>의료진소개</h2>
		</div>
		<div class="container">
			<section class="staff">
				<div class="section-header">
					<h3>행복한 SRC 재활병원의 전문의료진들이 최고의 의료서비스를 제공합니다.</h3>
				</div>
				<?
				for($i=0;$i<sizeof($mtAr);$i++){
					switch($mtAr[$i]){
						case "재활병원의료진":
							$wrapCss = "rehabilitation";
							$teamTitle = "재활병원 의료진";
							break;
						case "요양병원의료진":
							$wrapCss = "convalescence";
							$teamTitle = "요양병원 의료진";
							break;
					}
				?>
				<div class="<?=$wrapCss?>">
					<h4><?=$temTitle?></h4>
					<ul class="team row">
						<?
						$sql = " select * from ".$site_prefix."board_medicalteam where Category = '".$mtAr[$i]."' order by border desc, BoardIdx desc ";
						$result = sql_query($sql);
						for($i=0;$row = sql_fetch_array($result);$i++){
							$row["files"] = get_file($site_prefix."board_medicalteam",$row["BoardIdx"]);
						?>
						<li class="col-xs-6 col-sm-6">
						   <a href="staff_view.php?idx=<?=$row["BoardIdx"]?>">
							   <figure>
								   <img src="<?=$row["files"][0]["path"]?>/<?=$row["files"][0]["file_source"]?>" class="img-responsive" alt="">
								   <figcaption>
									   <dl>
											<dt><?=$row["Title"]?></dt>
											<dd><?=$row["bd1"]?></dd>
										</dl>
								   </figcaption>
							   </figure>
						   </a>
						</li>
						<?
						}
						?>
					</ul>
				</div>
				<?
				}
				?>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
