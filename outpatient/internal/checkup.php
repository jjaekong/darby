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
                <li class="active">내과/가정의학과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="outpatient checkup"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>내과/가정의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/outpatient/internal/digestion.php">소화기내과</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/adult_disease.php">성인병클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/internal_secretion.php">내분비클리닉</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/outpatient/internal/checkup.php">건강검진</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/vaccination.php">예방접종안내</a>
                </li>
            </ul>
            <section class="checkup-list">
                <div class="section-header">
                    <h2>건강검진</h2>
                </div>
                <p>
                    100세 시대란 말이 나오는 요즘, 매일 매일 바쁜 일상 속에서 살아가고 있는 현대인들이 자발적으로 건강검진을 받는다는 것이 쉬운 일은 아닙니다. 그러다 보니 초기에 발견하여 쉽게 치료할 수 있는 병도 시기를 놓쳐 나중에 더 큰 고통을 겪어야 하는 경우가 종종 있습니다. 예전엔 단지 오래 사는 것을 추구하였다면 지금은 ‘건강하게 잘 사는 것’을 추구하고 있지요. ‘웰빙’에 대한 관심이 높아지면서 건강검진에 대한 인식 또는 나날이 바뀌고 있습니다. 건강한 사람일수록 꾸준하게 자신의 건강을 관리함으로써 질병의 예방과 조기 발견, 건강에 대한 불안감에서 벗어나 생활의 활력을 얻을 수 있습니다. 국가건강검진은 크게 '일반 건강검진, 생애전환기 건강검사, 5대 암 검진'으로 나누어집니다
                </p>
                <h3>일반검진 (국민건강보험 공단검진 안내)</h3>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 585px;">
                            <col style="width: 585px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>검진내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>대상자</td>
                                <td>
                                    지역세대주, 직장가입자 및 만 40세 이상 세대원과 피부양자, 의료급여수급권자<br>
                                    (만 19세-62세 세대주 만 40-64세 세대원)<br>
                                    <p class="standard">매 2년마다 1회, 비 사무직은 매년실시</p>
                                    <p class="standard">만 40세, 66세는 생애전환기건강진단 대상자로 일반건강검진 대상에서 제외됩니다.</p>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>1차 건강진단</td>
                                <td>
                                    <ol class="number-list">
                                        <li>진찰, 상담, 신장, 체중, 허리둘레, 체질량치수, 시력, 청력, 혈압측정</li>
                                        <li>총 콜레스테롤, HDL콜레스테롤, LDL콜레스테롤, 트리글리세라이드</li>
                                        <li>AST(SGOT), ALT(SGPT), 감마지티피</li>
                                        <li>공복혈당</li>
                                        <li>요단백, 혈청크레아타닌, 혈색소, 신사구체여과울 (e-GFR)</li>
                                        <li>흉부방사선촬영</li>
                                        <li>구강검진</li>
                                        <li>
                                            KDSQ-P 선별검사 
                                            <dl class="inline-dl">
                                                <dt>(치매선별검사 </dt>
                                                <dd>
                                                    만 70세, 74세만 해당)
                                                </dd>
                                            </dl>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>2차 건강진단</td>
                                <td>
                                    <ol class="number-list">
                                        <li>
                                            <dl class="inline-dl">
                                                <dt>공통</dt>
                                                <dd> 건강검진 진찰, 상담</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="inline-dl">
                                                <dt>고혈압</dt>
                                                <dd> 1차 검진 결과 고혈압 질환 의심자 &gt;&gt; 혈압측정</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="inline-dl">
                                                <dt>당뇨병</dt>
                                                <dd> 1차 검진결과 당뇨병 질환 의심자 &gt;&gt; 공복혈당측정</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="inline-dl">
                                                <dt>인지기능장애</dt>
                                                <dd> 1차검진 수검자 중 인지기능장애 고위험군 &gt;&gt; KDSQ-C 선별검사</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl class="inline-dl">
                                                <dt>KDSQ-C 선별검사 (치매선별감사</dt>
                                                <dd> 만 70세, 74세만 해당)</dd>
                                            </dl>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="attention">6인이상 단체검진 시 차량 지원됩니다.</p>
                </div>
                <h3>생애전환기 검강검진 안내</h3>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 585px;">
                            <col style="width: 585px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>검진내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>대상자</td>
                                <td>
                                    생애전환기 건강진단 대상자는 일반검진 대상자 중<br>
                                    만 40세와 만 66세 연령에 도달하는 해애 실시합니다.
                                </td>
                            </tr>
                            <tr>
                                <td>1차 건강진단</td>
                                <td>
                                    <ol class="number-list">
                                        <li>진찰, 상담, 신장, 체중, 허리둘레, 체질량치수, 시력, 청력, 혈압측정</li>
                                        <li>총 콜레스테롤, HDL콜레스테롤, LDL콜레스테롤, 트리글리세라이드</li>
                                        <li>AST(SGOT), ALT(SGPT), 감마지티피</li>
                                        <li>시력. 청력, 진찰 및 상담</li>
                                        <li>공복혈당</li>
                                        <li>요단백, 혈청크레아타닌, 혈색소</li>
                                        <li>흉부방사선촬영</li>
                                        <li>암검진</li>
                                        <li>골밀도검사 (만 66세 여성)</li>
                                        <li>노인신체기능검사 (만 66세) - 낙상검사 (하지기능 평형성)</li>
                                        <li>간염검사</li>
                                    </ol>
                                    (만 40세, B형간염표면항원 양성자 또는 자동, 피동면역으로 인한 한체형성자 제외)
                                </td>
                            </tr>
                            <tr>
                                <td>2차 건강진단</td>
                                <td>
                                    <ol class="number-list">
                                        <li>차 건강진단 결과 및 HRA 상담</li>
                                        <li>
                                            생활습관검사 - 생활습관 평가 및 처방 도구<br>
                                            (흡연, 음주, 운동, 영양, 비만 : 비흡연자, 비음주자는 평가 비대상임)
                                        </li>
                                        <li>정신건강검사 (공통문진표의 결과에 따라 우울증, 인지기능장애에 대상자 선별 후 진행)</li>
                                        <li>고혈압,  당뇨 2차 확진검사</li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>5대 암 검진</h3>
                <ul class="arrow-list">
                    <li>본인 부담금이 없거나 일부 검사에 한해 10%를 부담하게 됩니다.</li>
                    <li>조기에 발견된 암은 90% 치료가 가능하다니 이제 암 검진은 선택이 아닌 필수입니다.</li>
                </ul>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 585px;">
                            <col style="width: 585px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>검진명</th>
                                <th>검진대상</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>위암 검진</td>
                                <td>
                                    <ol class="number-list">
                                        <li>만 40세 이상 남녀</li>
                                        <li>증상이 없어도 2년마다 위장조영검사 또는 위내시경 검사 선택 수검</li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>대장암 검진</td>
                                <td>
                                    <ol class="number-list">
                                        <li>만 50세 이상 남녀</li>
                                        <li>
                                            1년마다 분변잠혈검사를 받은 후 양성판정자는 대장 내시경 검사 시행<br>
                                            (검사비 일부 공단 지원)
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>간암 검진</td>
                                <td>
                                    <ol class="number-list">
                                        <li>만40세 이상 남녀</li>
                                        <li>간암 발생 고위험군에 해당되는 대상자는 간 초음파검사와 혈액검사</li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>유방암 검진</td>
                                <td>
                                    <ol class="number-list">
                                        <li>만 40세 이상 여성</li>
                                        <li>2년마다 유방촬영 검사</li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td>자궁경부암 검진</td>
                                <td>
                                    <ol class="number-list">
                                        <li>만 20세 이상 여성</li>
                                        <li>2년마다 자궁경부 세포 검사</li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="http://health.srchospital.com/" class="btn btn-red" target="_blank">SRC건강검진센터</a>
                    </p>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
