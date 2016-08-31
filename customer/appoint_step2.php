<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); 

if($is_guest) GetAlert("회원전용메뉴입니다. 회원이시라면 로그인하시기 바랍니다.","/member/login.php?URI=".urlencode($_SERVER['REQUEST_URI']));

if(empty($idx)) GetAlert("잘못된 접근입니다.","/customer/appoint_step1.php");

$sql = " select a.*, b.idx, b.name from ".$site_prefix."board_account a right join ".$site_prefix."charge b on a.bd3 = b.idx where a.BoardIdx = '".$idx."' ";
$row = sql_fetch($sql);
?>
<link href="/css/customer.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">고객서비스</a></li>
				<li class="active">온라인 예약</li>
			</ol>
		</div>
	</div>
	<main id="content" class="customer appoint step2">
		<div class="page-header">
			<h2>온라인 예약</h2>
		</div>
		<div class="steps">
			<div class="container">
				<ol>
					<li><p>로그인<br><small>(비회원일 경우<br>회원가입을 먼저 해주세요)</small></p></li>
					<li><p>희망날짜,<br>의료진 및 진료시간 선택</p></li>
					<li class="active"><p>예약 신청 내용 확인</p></li>
					<li><p>완료 후 예약일에 방문</p></li>
				</ol>
			</div>
		</div>
		<div class="container">
			<section class="confirm">
				<div class="section-header">
					<h3>예약신청확인</h3>
				</div>
				<table class="table">
					<colgroup>
						<col style="width: 220px">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>예약날짜</th>
							<td><?=date("Y년 m월 d일",$row["bd1"])?></td>
						</tr>
						<tr>
							<th>예약센터</th>
							<td><?=$row["bd2"]?></td>
						</tr>
						<tr>
							<th>담당의료진</th>
							<td><?=$row["name"]?></td>
						</tr>
						<tr>
							<th>예약시간</th>
							<td><?=$row["bd4"]?></td>
						</tr>
					</tbody>
				</table>
				<ul class="notice">
					<li>선택하신 예약 내용을 확인해주세요.</li>
					<li>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</li>
					<li>담당자와의 전화상담이 되지 않았을 경우 상담전화 : 031 - 799 -3713, 3817로 연락을 주시면 신속한 상담으로 도와드리겠습니다.</li>
				</ul>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>