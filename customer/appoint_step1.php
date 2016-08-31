<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php');

if($is_guest) GetAlert("회원전용메뉴입니다. 회원이시라면 로그인하시기 바랍니다.","/member/login.php?URI=".urlencode($_SERVER['REQUEST_URI']));
?>
<script type="text/javascript" src="/board/config/FormCheck.js"></script>
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
	<main id="content" class="customer appoint step1">
		<div class="page-header">
			<h2>온라인 예약</h2>
		</div>
		<div class="steps">
			<div class="container">
				<ol>
					<li><p>로그인<br><small>(비회원일 경우<br>회원가입을 먼저 해주세요)</small></p></li>
					<li class="active"><p>희망날짜,<br>의료진 및 진료시간 선택</p></li>
					<li><p>예약 신청 내용 확인</p></li>
					<li><p>완료 후 예약일에 방문</p></li>
				</ol>
			</div>
		</div>
		<div class="container">
			<section class="schedule">
				<!--
					## 클래스명
					past: 오늘 이전의 모든 날들
					available: 예약가능
					impossible: 예약불가능
				--
				<header>
					<h3>2016년 5월</h3>
					<a class="prev" href="#"><img src="/images/customer/ico_arrow_left.png" alt="이전 달 보기"></a>
					<a class="next" href="#"><img src="/images/customer/ico_arrow_right.png" alt="다음 달 보기"></a>
				</header>
				<table class="calendar">
					<caption class="sr-only">예약일을 선택할 수 있는 캘린더</caption>
					<thead>
						<tr>
							<th>일요일</th>
							<th>월요일</th>
							<th>화요일</th>
							<th>수요일</th>
							<th>목요일</th>
							<th>금요일</th>
							<th>토요일</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="past">
								<span class="day">1</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">2</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">3</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">4</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">5</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">6</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">7</span>
								<p class="status">예약불가</p>
							</td>
						</tr>
						<tr>
							<td class="past">
								<span class="day">8</span>
								<p class="status">예약불가</p>
							</td>
							<td class="past">
								<span class="day">9</span>
								<p class="status">예약가능</p>
							</td>
							<td class="past">
								<span class="day">10</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">11</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">12</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available checked" tabindex="0">
								<span class="day">13</span>
								<p class="status">예약가능</p>
								<p class="cover">선택됨</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">14</span>
								<p class="status">예약불가</p>
							</td>
						</tr>
						<tr>
							<td class="impossible" tabindex="0">
								<span class="day">15</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">16</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">17</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">18</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">19</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">20</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">21</span>
								<p class="status">예약불가</p>
							</td>
						</tr>
						<tr>
							<td class="impossible" tabindex="0">
								<span class="day">22</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">23</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">24</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">25</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">26</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">27</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">28</span>
								<p class="status">예약불가</p>
							</td>
						</tr>
						<tr>
							<td class="impossible" tabindex="0">
								<span class="day">29</span>
								<p class="status">예약불가</p>
							</td>
							<td class="available" tabindex="0">
								<span class="day">30</span>
								<p class="status">예약가능</p>
							</td>
							<td class="impossible" tabindex="0">
								<span class="day">31</span>
								<p class="status">예약불가</p>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<ul class="notice">
					<li>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</li>
					<li>홈페이지 예약확인 및 전화예약은 (상담전화 : 031-799-3713, 3817)로 주시기 바랍니다.</li>
					<li>본원의 모든 의료진의 진료예약의 경우 조기마감 될 수 있으니 예약 후 진료예약실에 확인해주시기 바랍니다.</li>
				</ul-->
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
				<div class="departments">
					<select class="form-control" name="bd2" exp title="진료과" id="charge_part" onchange="charge_ck(this.value);">
						<option value="">진료과 선택</option>
						<?
						$sql = " select distinct(part) from ".$site_prefix."charge where 1=1 order by partorder desc, part asc ";
						$result = sql_query($sql);
						for($i=0;$row = sql_fetch_array($result);$i++){
							echo "<option value='".$row["part"]."'>".$row["part"]."</option>";
						}
						?>
					</select>
				</div>
				<div class="doctor-list" data-toggle="buttons" id="charge_list">
					<!--ul>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group" data-toggle="buttons">
								<label class="btn active">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
						<li>
							<figure>
								<img src="/images/customer/img_doctor.png" alt="">
								<figcaption>
									<strong>김동진 과장</strong>
									<small>재활의학과 전문의</small>
								</figcaption>
							</figure>
							<div class="btn-group">
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오전
								</label>
								<label class="btn">
									<input type="radio" name="#" autocomplete="off"> 오후
								</label>
							</div>
						</li>
					</ul-->
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
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
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
					location.href = '/customer/online_list.php';
				<?
						} else {
				?>
					if(!confirm("<?=$member['UserName']?>님은 <?=date('Y년 m월 d일', $frow['bd1'])?>에 <?=$frow['bd2']?> <?=$trow['name']?>\n예약 신청 되어 있습니다. 기존예약을 취소하시겠습니까?")){
						location.href = '/customer/appoint_list.php';
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