<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php');
$sql = " select * from ".$site_prefix."board_setting where BoardName = 'medicalteam' ";
$row = sql_fetch($sql);
$mtAr = explode("|",$row["Category"]);

$sql = $row = "";
?>
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">병원소개</a></li>
				<li class="active">의료진 소개</li>
			</ol>
		</div>
	</div>
	<main id="content" class="introduce medical-team"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
		<div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
			<h2>의료진 소개<br><small>Doctors</small></h2>
		</div>
		<!-- 실제 작업 영역 -->
		<div class="container">
			<section class="team">
				<div class="section-header">
					<h2>행복한 SRC 재활병원의 전문의료진들이<br><small>최고의 의료서비스를 제공합니다.</small></h2>
				</div>
				<div class="section-content">
					<div class="rehabilitation">
						<ul class="team-list">
							<?
							$sql = " select * from ".$site_prefix."board_medicalteam where 1=1 order by border desc, BoardIdx desc ";
							$result = sql_query($sql);
							for($i=0;$row = sql_fetch_array($result);$i++){
								$row["files"] = get_file($site_prefix."board_medicalteam",$row["BoardIdx"]);
								if($i == 0) echo "<li>&nbsp;</li><li>&nbsp;</li>";
							?>
							<li>
								<a href="javascript:;" data-toggle="modal" data-target="#staff-modal" data-id="<?=$row["BoardIdx"]?>" >
									<figure>
										<p>
											<img src="<?=$row["files"][0]["path"]?>/<?=$row["files"][0]["file_source"]?>" alt="" width="170" height="170">
											<span></span>
										</p>
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
								if($i == 1) echo "<li>&nbsp;</li><li>&nbsp;</li>";
							}
							?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<!-- // 실제 작업 영역 -->
	</main>

	<!-- Modal -->
	<div class="modal fade" id="staff-modal">
		<div class="modal-dialog">
			<div class="modal-content">
			</div>
		</div>
	</div>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script>
	$(document).ready(function(){
		$("#staff-modal").on("show.bs.modal", function(event){
			var seq = $(event.relatedTarget).data("id");

			jQuery.ajax({
				url: "ajax_medicalteam.php",
				type: 'POST',
				data: "idx="+seq,

				error: function(xhr,textStatus,errorThrown){
					alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
				},
				success: function(data){
					$(".modal-content").html(data);
				},
				complete: function(){
				}
			});
		});
	});
	</script>
</body>
</html>
