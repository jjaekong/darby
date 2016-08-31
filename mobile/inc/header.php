<nav id="topnav">
	<ul>
		<li><a href="tel:15773622"><img src="/mobile/images/ico_mobile_xs.png" alt="" height="13"> 전화문의</a></li>
		<li><a href="/mobile/customer/appoint_login.php"><img src="/mobile/images/ico_calendar_xs.png" alt="" height="13"> 온라인예약</a></li>
		<li><a href="/mobile/introduce/location.php"><img src="/mobile/images/ico_mappin_xs.png" alt="" height="13"> 오시는 길</a></li>
	</ul>
</nav>
<header id="header">
	<button type="button" class="btn btn-home" onclick="location.href='/mobile';"><span class="glyphicon glyphicon-home"></span></button>
	<h1><img src="/mobile/images/logo.png" alt="사회복지법인 SRC병원" width="80"></h1>
	<button type="button" class="btn btn-menu">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="sr-only">메뉴버튼</span>
	</button>
</header>
<nav id="nav" class="collapsed" tabindex="-1">
	<div class="nav-backdrop"></div>
	<div class="nav-container">
		<button type="button" class="btn btn-nav-close"><img src="/mobile/images/btn_close.png" alt="네비게이션 닫기"></button>
		<ul class="member">
			<? if($is_guest){ ?>
			<li><a href="/mobile/member/login.php">로그인</a></li>
			<li><a href="/mobile/member/login_terms.php">회원가입</a></li>
			<? } ?>
			<? if($is_member){ ?>
			<li><a href="/mobile/member/logout.php">로그아웃</a></li>
			<li><a href="/mobile/member/edit_form.php">정보수정</a></li>
			<? } ?>
		</ul>
		<ul class="quick">
			<li><a href="/mobile/customer/appoint_login.php">온라인예약</a></li>
			<li><a href="/mobile/outpatient/medical.php">진료시간 안내</a></li>
			<li><a href="/mobile/introduce/location.php">오시는 길</a></li>
		</ul>
		<div class="nav-content">
			<ul class="gnb">
				<li>
					<a href="/mobile/introduce/about.php">병원소개</a>
					<ul>
						<li><a href="/mobile/introduce/greeting.php">인사말</a></li>
						<li><a href="/mobile/introduce/about.php">병원소개</a></li>
						<li><a href="/mobile/introduce/history.php">연혁</a></li>
						<li><a href="/mobile/introduce/medical_team.php">의료진 소개</a></li>
						<li><a href="/mobile/introduce/look_round.php">병원 둘러보기</a></li>
						<li><a href="/mobile/introduce/location.php">오시는 길</a></li>
					</ul>
				</li>
				<li>
					<a href="/mobile/departments/rehabilitation.php">진료과목</a>
					<ul>
						<li><a href="/mobile/departments/rehabilitation.php">재활의학과</a></li>
						<li><a href="/mobile/departments/internal.php">내과</a></li>
						<li><a href="/mobile/departments/pediatric.php">가정의학과/소아과</a></li>
						<li><a href="/mobile/departments/oriental.php">한의과</a></li>
						<li><a href="/mobile/under_construction.php">SRC치료법</a></li>
					</ul>
				</li>
				<li>
					<a href="/mobile/under_construction.php">외래(진료센터)</a>
					<ul>
						<li><a href="/mobile/under_construction.php">재활의학과</a></li>
						<li><a href="/mobile/under_construction.php">내과/가정의학과</a></li>
						<li><a href="/mobile/under_construction.php">한의과</a></li>
						<li><a href="/mobile/under_construction.php">언어심리상담센터</a></li>
						<li><a href="/mobile/outpatient/medical.php">진료안내</a></li>
					</ul>
				</li>
				<li>
					<a href="/mobile/under_construction.php">입원(재활센터)</a>
					<ul>
						<li><a href="/mobile/under_construction.php">뇌졸증 재활센터</a></li>
						<li><a href="/mobile/under_construction.php">척추손상 재활센터</a></li>
						<li><a href="/mobile/under_construction.php">호흡 재활센터</a></li>
						<li><a href="/mobile/under_construction.php">소아 재활센터</a></li>
						<li><a href="/mobile/under_construction.php">근골격 재활센터</a></li>
						<li><a href="/mobile/under_construction.php">환자지원 프로그램</a></li>
						<li><a href="/mobile/inpatient/rehab_guide.php">재활병원 입원안내</a></li>
						<li><a href="/mobile/inpatient/vip.php">VIP병동 입원안내</a></li>
						<li><a href="/mobile/under_construction.php">입원식단안내</a></li>
						<li><a href="/mobile/under_construction.php">재활요양 입원안내</a></li>
						<li><a href="/mobile/under_construction.php">암요양병원(베네라이프)</a></li>
					</ul>
				</li>
				<li>
					<a href="/mobile/customer/faq.php">고객서비스</a>
					<ul>
						<li><a href="/mobile/customer/faq.php">자주하는 질문</a></li>
						<li><a href="/mobile/customer/certificate.php">제증명서 발금안내</a></li>
						<li><a href="/mobile/customer/appoint_login.php">온라인 예약</a></li>
						<li><a href="/mobile/customer/appoint_list.php">예약확인</a></li>
						<li><a href="/mobile/customer/contact.php">부서 전화번호</a></li>
						<li><a href="/mobile/customer/sum_list.php">비급여 항목</a></li>
					</ul>
				</li>
				<li>
					<a href="/mobile/community/news_list.php">커뮤니티</a>
					<ul>
						<li><a href="/mobile/community/news_list.php">병원소식</a></li>
						<li><a href="/mobile/community/review.php">치료후기</a></li>
						<li><a href="/mobile/community/photo_list.php">전/후사진</a></li>
						<li><a href="/mobile/community/health.php">건강정보</a></li>
						<!--li><a href="/mobile/community/movie_list.php">영상게시판</a></li-->
						<li><a href="/mobile/under_construction.php">사회공헌사업</a></li>
						<li><a href="/mobile/community/recruit.php">채용정보</a></li>
					</ul>
				</li>
			</ul>
			<p class="contact">
				<a class="btn-tel" href="tel:15773622"><span class="glyphicon glyphicon-earphone"></span> 전화상담 <span class="bar" role="separator">|</span> 1577-3622</a>
			</p>
		</div>
	</div>
</nav>