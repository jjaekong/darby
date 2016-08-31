<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">진료과목</a></li>
                <li class="active">SRC 치료법</li>
            </ol>
        </div>
    </div>
    <main id="content" class="site-map"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>병원소개</h2>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            <div class="site-info">
                <div>
                    <h3>병원소개</h3>
                    <ul>
                        <li><a href="/introduce/greetings.php">인사말</a></li>
                        <li><a href="/introduce/about.php">병원소개</a></li>
                        <li><a href="/introduce/history.php">연혁</a></li>
                        <li><a href="/introduce/medical_team.php">의료진소개</a></li>
                        <li><a href="/introduce/look_round.php">병원둘러보기</a></li>
                        <li><a href="/introduce/bus.php">오시는길</a></li>
                        <li><a href="/introduce/partners.php">협력기관</a></li>
                    </ul>
                </div>
                <div>
                    <h3>진료과목</h3>
                    <ul>
                        <li><a href="/departments/rehabilitation.php">재활의학과</a></li>
                        <li><a href="/departments/internal.php">내과</a></li>
                        <li><a href="/departments/pediatric.php">가정의학과</a></li>
                        <li><a href="/departments/oriental.php">한의과</a></li>
                        <li><a href="/departments/treatment/adult_exercise.php">SRC치료법</a></li>
                    </ul>
                </div>
                <div class="departments">
                    <h3>외래센터</h3>
                    <ul>
                        <li>
                            <a href="/outpatient/rehabilitation/spine.php">재활의학과</a>
                            <ul>
                                <li><a href="/outpatient/rehabilitation/spine.php">척추질환클리닉</a></li>
                                <li><a href="/outpatient/rehabilitation/joint.php">관절클리닉</a></li>
                                <li><a href="/outpatient/rehabilitation/surgery.php">수술 후 재활클리닉</a></li>
                                <li><a href="/outpatient/rehabilitation/muscle_pain.php">근육통/만성통증클리닉</a></li>
                                <li><a href="/outpatient/rehabilitation/correction.php">교정클리닉</a></li>
                                <li><a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉 </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/outpatient/internal/digestion.php">내과/가정의학과</a>
                            <ul>
                                <li><a href="/outpatient/internal/digestion.php">소화기내과</a></li>
                                <li><a href="/outpatient/internal/adult_disease.php">성인병클리닉</a></li>
                                <li><a href="/outpatient/internal/internal_secretion.php">내분비클리닉</a></li>
                                <li><a href="/outpatient/internal/checkup.php">건강검진</a></li>
                                <li><a href="/outpatient/internal/vaccination.php">예방접종안내</a></li>
                            </ul>
                        </li>
                        <li><a href="/outpatient/oriental_medicine.php">한의과</a></li>
                        <li><a href="/outpatient/information.php">진료안내</a></li>
                    </ul>
                </div>
                <div class="inpatient">
                    <h3>입원(재활센터)</h3>
                    <ul>
                        <li><a href="/inpatient/stroke.php">뇌신경 재활센터</a></li>
                        <li><a href="/inpatient/spine.php">척추손상 재활센터</a></li>
                        <li><a href="/inpatient/breath.php">호흡 재활센터</a></li>
                        <li><a href="/inpatient/young.php">소아 재활센터</a></li>
                        <li><a href="/inpatient/joint.php">근골격 재활센터</a></li>
                        <li><a href="/inpatient/business_team.php">재활병원 입원안내</a></li>
                        <li><a href="/inpatient/rehab_guide.php">VIP병동 입원안내</a></li>
                        <li><a href="/inpatient/vip.php">임원 식단안내</a></li>
                        <li><a href="/inpatient/menu_guide.php">환자지원 프로그램</a></li>
                        <li><a href="/inpatient/rehabilitation.php">재활요양 입원안내</a></li>
                        <li><a href="/inpatient/carcinoma.php">암요양 병원</a></li>
                    </ul>
                </div>
                <div>
                    <h3>고객서비스</h3>
                    <ul>
                        <li><a href="/customer/faq.php">자주하는 질문</a></li>
                        <li><a href="/customer/certificate.php">제증명서 발급안내</a></li>
                        <li><a href="/customer/appoint_login.php">온라인 예약</a></li>
                        <li><a href="/customer/contact.php">부서 전화번호</a></li>
                        <li><a href="/customer/sum_list.php">비급여 항목</a></li>
                    </ul>
                </div>
                <div>
                    <h3>커뮤니티</h3>
                    <ul>
                        <li><a href="/community/news_list.php">병원소식</a></li>
                        <li><a href="/community/review_list.php">치료후기</a></li>
                        <li><a href="/community/photo_list.php">전/후사진</a></li>
                        <li><a href="/community/health_list.php">건강정보</a></li>
                        <li><a href="/community/video.php">영상게시판</a></li>
                        <li><a href="/community/social_contribution.php">사회공헌사업</a></li>
                        <li><a href="/community/recruit_list.php">채용정보</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
