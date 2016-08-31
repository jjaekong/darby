<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php');

if($is_guest){
	GetAlert("회원전용 서비스입니다. 회원이시라면 로그인 후 이용바랍니다.","/member/login.php?URI=".$_SERVER['PHP_SELF']);
}
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
				<li class="active">예약확인</li>
			</ol>
		</div>
	</div>
	<main id="content" class="customer appoint list">
		<div class="page-header">
			<h2>예약확인</h2>
		</div>
		<div class="container">
			<section class="appoint-list">
				<div class="section-header">
					<h3>진료예약 내역</h3>
				</div>
				<table class="table table-bordered">
					<colgroup>
						<col style="width: 100px">
						<col style="width: 300px">
						<col style="width: 170px">
						<col style="width: 200px">
						<col style="width: 200px">
						<col style="width: 200px">
					</colgroup>
					<thead>
						<tr>
							<th>번호</th>
							<th>예약센터</th>
							<th>담당의료진</th>
							<th>예약날짜</th>
							<th>예약시간</th>
							<th>진행상황</th>
						</tr>
					</thead>
					<tbody>
						<?
						$pagebt1=$loc."/image/board_img/prev_btn02.gif";
						$pagebt2=$loc."/image/board_img/prev_btn.gif";
						$pagebt3=$loc."/image/board_img/next_btn.gif";
						$pagebt4=$loc."/image/board_img/next_btn02.gif";
						$PageBlock = 5;
						$board_list_num = 5;
						
						if(!$is_admin){
							$sql_common = " and UserID = '".$member["UserID"]."' ";
						}

						$tsql = " select * from ".$site_prefix."board_account where Category = '온라인예약' ".$sql_common." order by BoardIdx desc ";
						$tresult = sql_query($tsql);
						$tcnt  = mysql_num_rows($tresult);

						$total_page  = ceil($tcnt / $board_list_num);
						if (!$page) $page = 1;
						$from_record = ($page - 1) * $board_list_num;

						$sql = $tsql." limit $from_record, $board_list_num";
						$result = sql_query($sql);
						$cnt = mysql_num_rows($result);

						$num = $tcnt - ($page-1)*$board_list_num;
						
						$write_pages = get_paging($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&page=");

						for($i=0;$row = sql_fetch_array($result);$i++){
							$uinfo = get_member($row["UserID"]);
							$csql = " select * from ".$site_prefix."charge where idx = '".$row["bd3"]."' ";
							$crow = sql_fetch($csql);

							$btnclass = "";
							$btntxt = "";
							$btnlink = "";

							switch($row["bd10"]){
								case "Y": // 취소
									$btnclass = "btn-cancel";
									$btntxt = "예약취소";
									$btnlink = "javascript:;";
									$cancel_ck = false;
									break;
								case "N": // 대기
									$btnclass = "btn-waiting";
									$btntxt = "예약대기";
									$btnlink = "javascript:account_cancel('".$row["BoardIdx"]."');";
									$cancel_ck = true;
									break;
								case "E": // 완료
									$btnclass = "btn-confirmed";
									$btntxt = "예약완료";
									$btnlink = "javascript:;";
									$cancel_ck = false;
									break;
							}
						?>
						<tr>
							<td><?=$num?></td>
							<td><?=$row["bd2"]?></td>
							<td><?=$crow["name"]?></td>
							<td><?=date("Y년 m월 d일",$row["bd1"])?></td>
							<td><?=$row["bd4"]?></td>
							<td><a class="btn <?=$btnclass?>" href="<?=$btnlink?>"><?=$btntxt?></a></td>
						</tr>
						<?
							$num--;
						}
						if($i == 0) echo "<tr><td colspan='6' class='list01 pt30 pb30'>예약내역이 없습니다.</td></tr>";
						?>
					</tbody>
				</table>
				<nav class="paging">
					<ul class="pagination">
						<?
						if($i>0){
							$write_pages = str_replace("처음", "<<", $write_pages);
							$write_pages = str_replace("이전", "<", $write_pages);
							$write_pages = str_replace("다음", ">", $write_pages);
							$write_pages = str_replace("맨끝", ">>", $write_pages);
							//$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $write_pages);
						//	$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $write_pages);
							echo $write_pages;
						}
						?>
					</ul>
				</nav>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script>
	function account_cancel(idx){
		if(!confirm("한번 취소한 예약은 되돌릴 수 없습니다. 예약을 취소하시겠습니까?")) return;

		location.href = "_proc_account.php?mode=<?=urlencode($site_prefix.'board_account')?>&workType=D&URI=<?=urlencode($_SERVER['PHP_SELF'])?>&idx="+idx;
	}
	</script>
</body>
</html>