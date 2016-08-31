<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/member.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member join-form">
		<div class="page-title">
			<h2>회원가입<br>
				<small>Join</small>
			</h2>
		</div>
		<div class="container-wrap">
			<div class="container">
				<section class="join">
					<div class="section-header">
						<h3>회원정보 입력</h3>
						<p>아래의 정보를 빠짐없이 입력해주세요.</p>
					</div>
					<div class="section-content">
						<form class="join-write">
							<table>
								<colgroup>
									<col style="min-width: 80px" />
									<col style="min-width: 220px" />
								</colgroup>
								<tbody>
									<tr class="user-id">
										<th><label for="user-id">아이디</label></th>
										<td>
											<input type="text" class="form-control" id="user-id">
											<div class="btn-area">
												<p>
													<a href="#" class="btn btn-gray">중복검사</a>
												</p>
											</div>
										</td>
									</tr>
									<tr>
										<th><label for="user-name">이름</label></th>
										<td>
											<input type="text" class="form-control" id="user-name">
										</td>
									</tr>
									<tr>
										<th><label for="password">비밀번호</label></th>
										<td>
											<input type="password" class="form-control" id="password">
										</td>
									</tr>
									<tr>
										<th><label for="pw-check">비밀번호<br>확인</label></th>
										<td>
											<input type="password" class="form-control" id="pw-check">
										</td>
									</tr>
									<tr class="email">
										<th><label for="email-addr">이메일</label></th>
										<td>
											<input type="email" class="form-control" name="#" id="email-addr">@
											<label class="sr-only" for="email-domain"></label><input type="email" class="form-control" name="#" id="email-domain">
										</td>
									</tr>
									<tr class="birthday">
										<th><label for="birthdate">생년월일</label></th>
										<td>
											<input type="text" class="form-control" id="birthdate">
											<div class="btn-area">
												<p>
													<a href="#"><img src="/mobile/images/member/join_img.png" alt="달력"></a>
												</p>
											</div>
										</td>
									</tr>
									<tr class="sex">
										<th>성별</th>
										<td>
											<label for="sex"><input type="radio" name="#" id="sex" checked>&nbsp;남자</label>
											<label for="woman"><input type="radio" name="#" id="woman">&nbsp;여자</label>
										</td>
									</tr>
									<tr class="address">
										<th><label for="address">주소</label></th>
										<td>
											<input type="text" class="form-control" name="#" id="address">
											<div class="btn-area">
												<p>
													<a href="#" class="btn btn-gray">우편번호 검색</a>
												</p>
											</div>
											<label class="sr-only" for="detailed-addr"></label><input type="text" class="form-control" name="#" id="detailed-addr">
											<label class="sr-only" for="house-number"></label><input type="text" class="form-control" name="#" id="house-number">
										</td>
									</tr>
									<tr class="tel">
										<th><label for="tel">전화번호</label></th> 
										<td>
											<input type="text" class="form-control" name="#" id="tel">-
											<label class="sr-only" for="tel2"></label><input type="text" class="form-control" name="#" id="tel2">-
											<label class="sr-only" for="tel3"></label><input type="text" class="form-control" name="#" id="tel3">
										</td>
									</tr>
									<tr class="phone">
										<th><label for="phone">휴대전화</label></th>
										<td>
											<input type="text" class="form-control" name="#" id="phone">-
											<label class="sr-only" for="phone2"></label><input type="text" class="form-control" name="#" id="phone2">-
											<label class="sr-only" for="phone3"></label><input type="text" class="form-control" name="#" id="phone3">
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</section>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">이전으로</a>
						<a href="#" class="btn btn-gray">가입완료</a>
					</p>
				</div>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>