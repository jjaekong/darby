<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer certificate">
		<div class="page-title">
			<h2>제증명서 발급안내</h2>
		</div>
		<div class="container">
			<section class="certificate-info">
				<div class="section-header">
					<h3>제증명 및 진료기록 사본발급 및 열람 신청시 필요 구비서류</h3>
					<p>‘보건복지가족부령 제158호 (의료법 제13조의 2 기록열람등의요건)’ 에 의거하여 아래의 경우에만 사본발급 및 열람이 가능함을 알려드립니다.</p>
				</div>
				<div class="section-content">
					<div class="panel-group accordion-list" id="rules-list">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-1" >
										환자본인
									</a>
								</h4>
							</div>
							<div id="rules-1" class="panel-collapse collapse in">
								<div class="panel-body">
									<h4>환자본인</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자 본인의 신분증 (주민등록증, 운전면허증, 여권)</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>학생증</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류</li>
									</ol>
									<p>의료보험증은 인정안됨</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-2" class="collapsed">
										환자의 친족<br> 배우자, 직계존속ㆍ비속, 배우자의 직계존속
									</a>
								</h4>
							</div>
							<div id="rules-2" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자의 친족<br> 배우자, 직계존속ㆍ비속, 배우자의 직계존속</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>환자 자필서명 동의서</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본(학생증)</li>
										<li>신청자의 신분증 사본</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>환자 자필서명 동의서</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류</li>
									</ol>
									<p>의료보험증은 인정안됨</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-3" class="collapsed">
										제 3자(대리인)
									</a>
								</h4>
							</div>
							<div id="rules-3" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>제 3자(대리인)</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>환자 자필서명 동의서</li>
										<li>환자 자필서명 위임장</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>환자 자필서명 동의서</li>
										<li>환자 자필서명 위임장</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류<p>의료보험증은 인정안됨</p></li>
										<li>법정대리인 자필서명 동의서</li>
										<li>법정대리인 자필서명 위임장</li>
									</ol>
									
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-4" class="collapsed">
										환자가 군복무중인 경우 (친족)
									</a>
								</h4>
							</div>
							<div id="rules-4" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 군복무중인 경우 (친족)</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>병적증명서 또는 복무확인서</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-5" class="collapsed">
										환자가 사망한 경우
									</a>
								</h4>
							</div>
							<div id="rules-5" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 사망한 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>사망진단서 또는 제적등본</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-6" class="collapsed">
										환자가 의식불명 또는 의식불명은<br> 아니지만 중증의 질환·부상으로 자필서명을<br> 할 수 없는 경우
									</a>
								</h4>
							</div>
							<div id="rules-6" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 의식불명 또는 의식불명은 아니지만 중증의 질환·부상으로 자필서명을 할 수 없는 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명 사실을 확인할 수 있는 서류</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-7" class="collapsed">
										환자가 행방불명인 경우
									</a>
								</h4>
							</div>
							<div id="rules-7" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 행방불명인 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명 사실을 확인할 수 있는 서류</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">동의서 다운로드</a>
						<a href="#" class="btn btn-gray">위임장 다운로드</a>
					</p>
				</div>
			</section>
			<section class="outpatients">
				<div class="section-header">
					<h4>증명서 발급 절차안내 (외래환자)</h4>
				</div>
				<div class="section-content">
					<ol>
						<li>
							<img src="/mobile/images/outpatient/medical_img1.png" alt="외래 접수">
							<p>외래 접수</p>
						</li>
						<li>
							<img src="/mobile/images/outpatient/medical_img2.png" alt="주치의 상담">
							<p>주치의 상담</p>
						</li>
						<li>
							<img src="/mobile/images/outpatient/medical_img3.png" alt="원무부 발급 신청">
							<p>원무부 발급 신청</p>
						</li>
						<li>
							<img src="/mobile/images/outpatient/medical_img4.png" alt="수납 후 발행">
							<p>수납 후 발행</p>
						</li>
					</ol>
				</div>
			</section>
			<section class="inpatient">
				<div class="section-header">
					<h4>증명서 발급 절차안내 (입원환자)</h4>
				</div>
				<div class="section-content">
					<ol>
						<li>
							<img src="/mobile/images/outpatient/medical_img1.png" alt="외래 접수">
							<p>외래 접수</p>
						</li>
						<li>
							<img src="/mobile/images/outpatient/medical_img4.png" alt="수납 후 발행">
							<p>수납 후 발행</p>
						</li>
						<li>
							<img src="/mobile/images/outpatient/medical_img5.png" alt="원무부 수령 (발급비용은 입원료에 포함)">
							<p>원무부 수령<br>(발급비용은 입원료에 포함)</p>
						</li>
					</ol>
				</div>
			</section>
			<section class="certificate-issue">
				<div class="section-header">
					<h4>증명서 발급 절차안내 (입원환자)</h4>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col style="min-width:100px"/>
								<col style="min-width:100px"/>
								<col style="min-width:100px"/>
							</colgroup>
							<thead>
								<tr>
									<th>종류</th>
									<th colspan="2">비용</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">일반진단서</td>
									<td>한글</td>
									<td>20,000</td>
								</tr>
								<tr>
									<td>영문</td>
									<td>40,000</td>
								</tr>
								<tr>
									<td>소견서</td>
									<td colspan="2">10,000</td>
								</tr>
								<tr>
									<td>입통원확인서</td>
									<td colspan="2">3,000</td>
								</tr>
								<tr>
									<td>진료의뢰서</td>
									<td colspan="2">비용없음</td>
								</tr>
								<tr>
									<td rowspan="2">후유장애진단서</td>
									<td>원본</td>
									<td>150,000</td>
								</tr>
								<tr>
									<td>부본</td>
									<td>15,000</td>
								</tr>
								<tr>
									<td rowspan="3">장애진단서</td>
									<td>지체장애</td>
									<td>-</td>
								</tr>
								<tr>
									<td>정신장애</td>
									<td>40,000</td>
								</tr>
								<tr>
									<td>언어장애</td>
									<td>40,000</td>
								</tr>
								<tr>
									<td>보장구처방전</td>
									<td colspan="2">비용없음</td>
								</tr>
								<tr>
									<td>보장구검수확인서</td>
									<td colspan="2">비용없음</td>
								</tr>
								<tr>
									<td>건강진단서</td>
									<td colspan="2">20,000</td>
								</tr>
								<tr>
									<td rowspan="2">장애진단서</td>
									<td>원본</td>
									<td>100,000</td>
								</tr>
								<tr>
									<td>부본</td>
									<td>10,000</td>
								</tr>
								<tr>
									<td rowspan="2">의무기록<br>복사비용</td>
									<td>1~5장<br><br>6장 이상</td>
									<td>2,000<br><br>장당 200원</td>
								</tr>
								<tr>
									<td>CD 복사</td>
									<td colspan="2">10,000</td>
								</tr>
								<tr>
									<td rowspan="2">상해진단서</td>
									<td>3주 이하</td>
									<td>10,000</td>
								</tr>
								<tr>
									<td>3주 이상</td>
									<td>20,000</td>
								</tr>
								<tr>
									<td>진단확인서<br>(보험회사제출용)</td>
									<td colspan="2">20,000</td>
								</tr>
								<tr>
									<td>국민연금<br>지체장애용 소견서</td>
									<td colspan="2">30,000</td>
								</tr>
								<tr>
									<td>국민연금<br>(소견서+장애진단서)</td>
									<td colspan="2">40,000</td>
								</tr>
								<tr>
									<td>근로능력평가용<br>진단서</td>
									<td colspan="2">20,000</td>
								</tr>
								<tr>
									<td>회송소견서</td>
									<td colspan="2">10,000</td>
								</tr>
								<tr>
									<td>부본(장당)</td>
									<td colspan="2">2,000</td>
								</tr>
								<tr>
									<td rowspan="2">향후치료비<br>추정서</td>
									<td>천만원 이상</td>
									<td>200,000</td>
								</tr>
								<tr>
									<td>3천만원 이하</td>
									<td>100,000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
		
