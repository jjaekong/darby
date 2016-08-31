<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');

if($is_guest){
	GetAlert("회원전용 서비스입니다. 회원이시라면 로그인 후 이용바랍니다.","/mobile/member/login.php?URI=".$_SERVER['PHP_SELF']);
}
?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer appoint_list">
		<div class="page-title">
			<h2>예약확인</h2>
		</div>
		<div class="container">
			<section class="reservation-confirm">
				<div class="section-header">
					<h3>진료예약 내역</h3>
				</div>
				<div class="section-content">
					<ul>
						<?
						$pagebt1=$loc."/mobile/images/ico_double_arrow_left.png";
						$pagebt2=$loc."/mobile/images/ico_arrow_left.png";
						$pagebt3=$loc."/mobile/images/ico_arrow_right.png";
						$pagebt4=$loc."/mobile/images/ico_double_arrow_right.png";
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
									$btnclass = "btn-charcoal";
									$btntxt = "예약취소";
									$btnlink = "javascript:;";
									$cancel_ck = false;
									break;
								case "N": // 대기
									$btnclass = "btn-gray";
									$btntxt = "예약대기";
									$btnlink = "javascript:account_cancel('".$row["BoardIdx"]."');";
									$cancel_ck = true;
									break;
								case "E": // 완료
									$btnclass = "btn-pink";
									$btntxt = "예약완료";
									$btnlink = "javascript:;";
									$cancel_ck = false;
									break;
							}
						?>
						<li>
							<dl>
								<dt>예약센터</dt>
								<dd><?=$row["bd2"]?></dd>
								<dt>담당의료진</dt>
								<dd><?=$crow["name"]?></dd>
								<dt>예약날짜</dt>
								<dd><?=date("Y년 m월 d일",$row["bd1"])?></dd>
								<dt>예약시간</dt>
								<dd><?=$row["bd4"]?></dd>
							</dl>
							<a href="<?=$btnlink?>" class="btn <?=$btnclass?>"><?=$btntxt?></a>
						</li>
						<?
							$num--;
						}
						if($i == 0) echo "<li style='padding:50px 0px;'>예약내역이 없습니다.</li>";
						?>
					</ul>
				</div>
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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>