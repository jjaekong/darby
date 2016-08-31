<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/jquery-ui.min.css" rel="stylesheet">
<link href="/css/member.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">Member</a></li>
				<li class="active">개인정보수정</li>
			</ol>
		</div>
	</div>
	<main id="content" class="member join form">
		<div class="page-header">
			<h2>개인정보수정</h2>
			<small>Modify</small>
		</div>
		<?
		$member_code = "Mypage";
		include $dir."/module/member.php";
		?>
		<!--div class="member-content">
			<section class="edit-section"> 
				<div class="section-header">
					<h3>회원정보입력 <small>아래의 정보를 빠짐없이 입력해주세요.</small></h3>
				</div>
				<div class="edit-form">
					<form>
						<table class="table">
							<colgroup>
								<col style="width: 220px;">
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th>아이디</th>
									<td>TEST</td>
								</tr>
								<tr>
									<th>이름</th>
									<td>테스트</td>
								</tr>
								<tr>
									<th><label for="edit-pw">비밀번호</label></th>
									<td><input id="edit-pw" class="form-control" type="password" name="#"></td>
								</tr>
								<tr>
									<th><label for="edit-repw">비밀번호확인</label></th>
									<td><input id="edit-repw" class="form-control" type="password" name="#"></td>
								</tr>
								<tr>
									<th><label for="edit-email">이메일</label></th>
									<td><input id="edit-email" class="form-control" type="email" name="#"></td>
								</tr>
								<tr class="birth">
									<th><label for="edit-birth">생년월일</label></th>
									<td>
										<input id="edit-birth" class="form-control" type="text" name="#">
									</td>
								</tr>
								<tr class="gender">
									<th>성별</th>
									<td>
										<label>
											<input type="radio" name="#"> 남자
										</label>
										<label>
											<input type="radio" name="#"> 여자
										</label>
									</td>
								</tr>
								<tr class="addr">
									<th><label for="edit-addr-zipcode">주소</label></th>
									<td>
										<div class="zipcode">
											<input id="edit-addr-zipcode" class="form-control" type="text" name="#">
											<button type="button" class="btn">우편번호 검색</button>
										</div>
										<div class="default">
											<label for="edit-addr-default" class="sr-only">기본주소</label>
											<input id="edit-addr-default" class="form-control" type="text" name="#">
										</div>
										<div class="details">
											<label for="edit-addr-details" class="sr-only">기본주소</label>
											<input id="edit-addr-details" class="form-control" type="text" name="#">
										</div>
									</td>
								</tr>
								<tr class="phone">
									<th><label for="edit-phone">전화번호</label></th>
									<td><input id="edit-phone" class="form-control" type="text" name="#"></td>
								</tr>
								<tr class="mobile">
									<th><label for="edit-mobile">휴대전화</label></th>
									<td><input id="edit-mobile" class="form-control" type="text" name="#"></td>
								</tr>
							</tbody>
						</table>
						<div class="btn-area">
							<p>
								<button type="submit" class="btn btn-edit">수정완료</button>
								<a href="#" class="btn btn-back">이전으로</a>
							</p>
						</div>
					</form>
				</div>
			</section>
		</div-->
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/js/member.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script>
		$('#edit-birth').datepicker({
			dateFormat: 'yy-mm-dd',
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
			dayNames: ['일','월','화','수','목','금','토'],
			dayNamesShort: ['일','월','화','수','목','금','토'],
			dayNamesMin: ['일','월','화','수','목','금','토'],
			showMonthAfterYear: true,
			yearSuffix: '년',
			defaultDate: "-40y",
			changeYear: true,
			changeMonth: true,
			showOn: "button",
			buttonImage: "/images/member/ico_calendar.png",
			buttonImageOnly: true
		});
	</script>
</body>
</html>