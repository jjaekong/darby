<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');

if($is_guest) GetAlert("회원전용메뉴입니다. 회원이시라면 로그인하시기 바랍니다.","/member/login.php?URI=".urlencode($_SERVER['REQUEST_URI']));

if(empty($idx)) GetAlert("잘못된 접근입니다.","/mobile/customer/appoint_step1.php");

$sql = " select a.*, b.idx, b.name from ".$site_prefix."board_account a right join ".$site_prefix."charge b on a.bd3 = b.idx where a.BoardIdx = '".$idx."' ";
$row = sql_fetch($sql);
?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer appoint-step2">
		<div class="page-title">
			<h2>온라인 예약</h2>
		</div>
		<div class="container">
			<ol class="steps">
				<li>
					<img src="/mobile/images/customer/reserve1.png" alt=""><br>
					<h3>로그인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve2.png" alt=""><br>
					<h3>희망날짜, 의료진 및 진료시간 선택</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve3_on.png" alt=""><br>
					<h3>예약 신청 내용 확인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve4.png" alt=""><br>
					<h3>완료 후 예약일에 방문</h3>
				</li>
			</ol>
			<section class="reserve-confirm">
				<div class="section-header">
					<h3>예약 신청 확인</h3>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col style="min-width:80px"/>
								<col style="min-width:220px"/>
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
						<p>선택하신 예약 내용을 확인해 주세요.</p>
						<p>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</p>
						<p>담당자와의 전화상담이 되지 않았을 경우<br>상담전화 : 031 - 799 - 3713, 3817로 연락을 주시면 신속한 상담으로 도와드리겠습니다.</p>
					</div>
					<div class="btn-area">
						<p>
							<a href="/mobile" class="btn btn-gray">메인으로</a>
							<a href="tel:15773622" class="btn btn-pink">전화연결</a>
						</p>
					</div>
				</div>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>