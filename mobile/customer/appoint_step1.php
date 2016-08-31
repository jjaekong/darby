<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');
if($is_guest) GetAlert("회원전용메뉴입니다. 회원이시라면 로그인하시기 바랍니다.","/member/login.php?URI=".urlencode($_SERVER['REQUEST_URI']));
?>
<script type="text/javascript" src="/board/config/FormCheck.js"></script>
<link href="/mobile/css/customer.css" rel="stylesheet" />
<link href="/mobile/css/customer_reserve.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer appoint-step1">
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
					<img src="/mobile/images/customer/reserve2_on.png" alt=""><br>
					<h3>희망날짜, 의료진 및 진료시간 선택</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve3.png" alt=""><br>
					<h3>예약 신청 내용 확인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve4.png" alt=""><br>
					<h3>완료 후 예약일에 방문</h3>
				</li>
			</ol>
			<section class="schedule">
				
			</section>
			<section class="doctors">
				<div class="section-header">
					<h3>의료진 및 진료시간 선택</h3>
				</div>
				<form name="account_form" method="post" action="_proc_account.php" onsubmit="return account_check();">
				<input type="hidden" name="mode" value="<?=$site_prefix."board_account"?>">
				<input type="hidden" name="Category" value="온라인예약">
				<input type="hidden" name="UserName" value="<?=$member["UserName"]?>">
				<input type="hidden" name="UserEmail" value="<?=$member["Email"]?>">
				<input type="hidden" name="bd1" id="cymd" exp title="진료일자">
				<input type="hidden" name="URI" value="appoint_step2.php">
				<input type="hidden" name="workType" value="I">
				<input type="hidden" name="bd10" value="N">
				<input type="hidden" name="bd3" id="charge_idx" exp title="담당의사">
				<input type="hidden" name="bd4" id="atime" exp title="진료시간">
				<div class="departs">
					<select class="form-control" name="bd2" exp title="진료과" id="charge_part" onchange="charge_ck(this.value);">
						<option value="">진료과 선택</option>
						<?
						$sql = " select distinct(part) from ".$site_prefix."charge where 1=1 order by part asc ";
						$result = sql_query($sql);
						for($i=0;$row = sql_fetch_array($result);$i++){
							echo "<option value='".$row["part"]."'>".$row["part"]."</option>";
						}
						?>
					</select>
				</div>
				<div class="doctor-list" data-toggle="buttons" id="charge_list">
					
				</div>
				<div class="btn-area">
					<p>
						<button type="reset" class="btn btn-cancel">취소</button>
						<button type="submit" class="btn btn-appoint">진료예약하기</button>
					</p>
				</div>
				</form>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
	<script>
		(function($) {
			$(document).on('click', '.schedule .calendar .available', function() {
				$('.schedule .calendar .available.checked').removeClass('checked');
				$('.schedule .calendar .available .cover').remove();
				$(this).addClass('checked');
				$(this).append('<p class="cover">선택됨</p>');
				account_ck($(this).attr("cymd"));
			});

			$(document).on("click", "#chargeBtn .btn", function(){
				var chargeIdx = $(this).find("input[name='atime']").attr("chargeIdx");
				var atime = $(this).find("input[name='atime']").attr("atime");
				$("#charge_idx").val(chargeIdx);
				$("#atime").val(atime);
			});

			$(window).load(function(){
				move_ym("<?=date('Ym',time())?>");
				<? if(!empty($rdate)){ ?>
				account_ck('<?=date("Y-m-d",strtotime($rdate))?>');
				<? } ?>
				
				<?
				if($is_member && !$is_manager && !$is_super){
					$fsql = " select * from ".$site_prefix."board_account where Category = '온라인예약' and UserID = '".$member["UserID"]."' and bd1 >= '".time()."' and bd10 != 'Y' order by BoardIdx desc limit 0, 1 ";
					$frow = sql_fetch($fsql);
					if(!empty($frow["BoardIdx"])) {
						$tsql = " select * from ".$site_prefix."charge where idx = '".$frow['bd3']."' ";
						$trow = sql_fetch($tsql);

						if($frow["bd10"] == "E"){
				?>
					alert("<?=$member['UserName']?>님은 <?=date('Y년 m월 d일', $frow['bd1'])?>에 <?=$frow['bd2']?> <?=$trow['name']?>\n예약 완료 되어 있어 예약목록으로 이동합니다.");
					location.href = '/mobile/customer/appoint_list.php';
				<?
						} else {
				?>
					if(!confirm("<?=$member['UserName']?>님은 <?=date('Y년 m월 d일', $frow['bd1'])?>에 <?=$frow['bd2']?> <?=$trow['name']?>\n예약 신청 되어 있습니다. 기존예약을 취소하시겠습니까?")){
						location.href = '/mobile/customer/appoint_list.php';
					} else {
						location.href = '/customer/_proc_account.php?workType=D&mode=<?=urlencode($site_prefix."board_account")?>&idx=<?=$frow["BoardIdx"]?>&URI=<?=urlencode($_SERVER["PHP_SELF"])?>';
					}
				<?
						}
					}
				}
				?>
			});
		})(jQuery);

		function account_ck(val){ //달력에서 날짜선택
			$("#cymd").val(val);
			$("#charge_part").val('');
			$("#charge_idx").val('');
			$("#atime").val('');
			charge_ck('');
		}

		function charge_ck(val){ //진료과 선택
			if($("#cymd").val() == ""){
				alert("예약을 희망하는 날짜를 먼저 선택하여주십시오.");
				$("#charge_part").val('');
				return;
			} else {
				jQuery.ajax({
					url: "ajax_charge.php",
					type: 'POST',
					data: "part="+val+"&cymd="+$("#cymd").val(),

					error: function(xhr,textStatus,errorThrown){
						alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
					},
					success: function(data){
						$("#charge_list").html(data);
					},
					complete: function(){
						$("#charge_idx").val('');
						$("#atime").val('');
					}
				});
			}
		}

		function move_ym(ym){
			jQuery.ajax({
				url: "ajax_calendar.php",
				type: 'POST',
				data: "schedule_ym="+ym+"&rdate=<?=$rdate?>",

				error: function(xhr,textStatus,errorThrown){
					alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
				},
				success: function(data){
					$(".schedule").html(data);
				},
				complete: function(){
				}
			});
		}

		function account_check(){
			if(!confirm("예약하시겠습니까?")) return false;
			var f = document.account_form;
			if(FormCheck(f) == true){
				return true;
			}

			return false;
		}
	</script>
</body>
</html>
		
