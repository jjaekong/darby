<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/outpatient.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">외래진료</a></li>
                <li class="active">진료안내</li>
            </ol>
        </div>
    </div>
    <main id="content" class="outpatient information">
        <div class="page-header">
            <h2>진료안내</h2>
            <small>Medical Information</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            
			<h1>외래진료안내</h1>
			<ul class="clinicProcess">
				<li>
					<img src="../images/outpatient/information_img01.gif" alt=""/>
					<p>내원</p>
				</li>
				<li>
					<img src="../images/outpatient/information_img02.gif" alt=""/>
					<p>원무부에서<br />진료신청서작성</p>
				</li>
				<li>
					<img src="../images/outpatient/information_img03.gif" alt=""/>
					<p>접수</p>
				</li>
				<li>
					<img src="../images/outpatient/information_img04.gif" alt=""/>
					<p>진료</p>
				</li>
				<li>
					<img src="../images/outpatient/information_img05.gif" alt=""/>
					<p>수납</p>
				</li>
				<li>
					<img src="../images/outpatient/information_img06.gif" alt=""/>
					<p>검사실 / 치료실<br />약국</p>
				</li>
			</ul>

			<div style="width:100%;margin:30px 0 115px 0;display:table;">
				<div class="infoBox w50 fl">
					<h2>외래진료 접수시 환전본인 신분증 제출 (의료보험카드, 주민등록증, 여권)</h2>
					<ul>
						<li><b>초진시 :</b> 진료신청서 작성 후 접수</li>
						<li><b>재진시 :</b> 환자분 확인 후 접수 (친족 외 타인 명의 접수 불가)</li>
					</ul>
				</div>
				<div class="infoBox w50 fr">
					<h2>환자 친족 (배우자, 직계존속ㆍ비속)이 신청하는 경우</h2>
					<ul>
						<li><b>신청인 신분증, 가족관계증명서 혹은 주민등록등본서류 (의료보험증 인정 안됨)</b></li>
						<li><b>환자 자필 서명동의서, 환자 신분증 사본</b></li>
					</ul>
				</div>
			</div>

			<h1>외래 진료시간표 <span>※ 12:00~13:00 까지 점심시간입니다.</span></h1>
			<table class="timeTable">
                <colgroup>
                    <col style="width:14%;">
                    <col style="width:14%;">
                    <col style="width:12%;">
                    <col style="width:12%;">
                    <col style="width:12%;">
                    <col style="width:12%;">
                    <col style="width:12%;">
                    <col style="width:12%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>진료시간</th>
                        <th>진료실</th>
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
                        <td rowspan="5">오전</td>
                        <td>1진료실</td>
                        <td>&nbsp;</td>
                        <td class="jhg">조형근</td>
                        <td>&nbsp;</td>
                        <td class="jhg">조형근</td>
                        <td class="kdj">김동진</td>
						<td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>2진료실</td>
                        <td class="jkh">정경훈</td>
                        <td class="jkh">정경훈</td>
                        <td class="yyh">윤용훈</td>
                        <td>&nbsp;</td>
                        <td class="yyh">윤용훈</td>
						<td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>3진료실</td>
                        <td rowspan="3" class="khb">김형빈</td>
                        <td rowspan="3" class="khb">김형빈 (10:00~)</td>
                        <td rowspan="3" class="khb">김형빈 (10:00~)</td>
                        <td rowspan="3" class="khb">김형빈 (10:00~)</td>
                        <td rowspan="3" class="khb">김형빈</td>
                        <td rowspan="3" class="khb">김형빈</td>
                    </tr>
					<tr>
                        <td>4진료실</td>
                    </tr>
					<tr>
                        <td>5진료실</td>
                    </tr>
					<tr>
                        <td rowspan="5">오후</td>
                        <td>1진료실</td>
                        <td class="jhg">조형근</td>
                        <td class="kdj">김동진</td>
                        <td class="jhg">조형근</td>
                        <td class="kdj">김동진</td>
                        <td class="jhg">조형근</td>
						<td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>2진료실</td>
                        <td class="yyh">윤용훈</td>
                        <td>&nbsp;</td>
                        <td class="jkh">정경훈</td>
                        <td class="yyh">윤용훈</td>
                        <td class="jkh">정경훈</td>
						<td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>3진료실</td>
                        <td>&nbsp;</td>
                        <td rowspan="3" class="khb">김형빈</td>
                        <td rowspan="3" class="khb">김형빈</td>
                        <td rowspan="3" class="khb">김형빈</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>4진료실</td>
                        <td class="kdj">김동진</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
					<tr>
                        <td>5진료실</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

			<div class="infoBox">
				<h2>초진시</h2>
				<ul>
					<li><b>외래 접수기간</b> : 월 ~금 (08:30 ~ 16:30) / 토 (08:30 ~ 12:00)</li>
					<li><b>외래 진료시간</b> : 월 ~ 금 (09:00 ~ 17:00) / 토 (09:00 ~ 13:00)</li>
					<li>점심시간 (12:00 ~ 13:00)에는 진료가 없음으로 되도록 점심시간대를 피해서 내원하여 주시면 감사하겠습니다.</li>
					<li>홈페이지 예약확인 및 전화 예약은 진료예약실 (031-799-3713, 3817)로 전화주시기 바랍니다.</li>
					<li>본원의 김형빈 부장의 진료예약 경우 조기 마감 될 수 있으니 예약 후 진료예약실의 확인을 받으셔야 합니다.</li>
				</ul>
			</div>

			<div class="infoBox">
				<h2>재진시</h2>
				<ul>
					<li>담당 주치의의 시간을 확인하시고 내원하기 바랍니다.</li>
				</ul>
			</div>

			<p class="call"><img src="../images/outpatient/icon_call.gif" alt=""/>진료예약 전화안내&nbsp;&nbsp;/&nbsp;&nbsp;<span>031- 799-9713, ~ 3817</span></p>

			<div class="reservationBox">
				<p>진료예약</p>
				<span>인터넷으로 진료 예약이 가능합니다.<br />안내에 따라 원하시는 의료진과 시간을 등록하시면 자동으로 예약 접수가 완료됩니다.</span>
				<a href="javascript:;"><i>진료예약하기</i></a>
			</div>

        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>