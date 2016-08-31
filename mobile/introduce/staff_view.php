<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); 
$sql = " select * from ".$site_prefix."board_medicalteam where BoardIdx = '".$idx."' ";
$row = sql_fetch($sql);
$row["files"] = get_file($site_prefix."board_medicalteam", $idx);
if($row["files"][1]["file_source"]){
	$img = "<img src='".$row["files"][1]["path"]."/".$row["files"][1]["file_source"]."' class='img-responsive'/>";
} else {
	$img = "<img src='/mobile/images/introduce/staff_01.gif'  class='img-responsive' />";
}
?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce staff-view">
		<div class="page-title">
			<h2>의료진소개</h2>
		</div>
		<div class="container">
			<section class="view">
			    <div class="section-header">
			        <h3>의료진소개</h3>
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
			    <ul class="staff-history">
			        <?
					echo "<li>";
					echo $row["Content"] = preg_replace("/\<br \/\>/i","</li><li>",nl2br($row["Content"]));
					echo "</li>";
					?>
			    </ul>
			    <div class="btn-area">
			        <p>
			            <a href="medical_team.php" class="btn btn-pink" role="button">목록</a>
			        </p>
			    </div>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
