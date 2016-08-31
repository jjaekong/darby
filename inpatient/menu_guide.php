 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/inpatient.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">입원안내</a></li>
                <li class="active">입원식단안내</li>
            </ol>
        </div>
    </div>
    <main id="content" class="inpatient menu-guide"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>입원식단안내</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/inpatient/rehab_guide.php">입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/business_team.php">사회사업팀(환자지원프로그램)</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/inpatient/menu_guide.php">입원식단안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/vip.php">VIP 입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/rehabilitation.php">재활요양병원안내</a>
                </li>
            </ul>
            <section class="nutrition">
                <div class="section-header">
                    <h2>SRC재활병원 영양팀</h2>
                </div>
                <p>
                    본원은 재활환자 치료에 필요한 적정한 영양을 섭취t할 수 있도록 위생적이고, 영양적으로 적절한 식사를 환자에게 제공하며, 영양교육 및 영양상담을 통해 환자의 영양상태를 개선시켜 치료의 효과를 증진시키는 역할을 하고 있습니다.
                </p>
                <p>
                    본원은 급식서비스와 임상영양서비스가 병원을 찾는 모든 환자 분들의 질병치료에 도움이 되고, 환우 분들께 만족과 기쁨을 드릴 수 있도록 앞으로도 최선의 노력을 다하겠습니다. 
                </p>
            </section>
            <section class="meal">
                <div class="section-header">
                    <h2>SRC만의 특화된 영양식사</h2>
                </div>
                <div class="section-content">
                    <h3>원칙주의 : 혈관튼튼식사</h3>
                    <ul class="arrow-list">
                        <li>
                            대다수의 만성질환은 식습관에서 옵니다. 저희 SRC영양팀은 식사에 치료의 신렴을 넣어 ‘혈관튼튼식사’를 만들고 있습니다. ‘혈관 튼튼 식사”란 저설탕, 저나트륨, 저지방식을 위해 칼슘과 비타민D위주의 식자재를 사용하여 식단을 구성합니다. 
                        </li>
                    </ul>
                    <h3>SRC에서 본심으로 매일 사용하는 식재</h3>
                    <ul class="arrow-list">
                        <li>
                            <dl class="inline-dl">
                                <dt>칼슘, 비타민D</dt>
                                <dd> 두부, 콩, 현미, 견과류</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>나트륨배출 및 비타민 D흡수 증진</dt>
                                <dd> 양배추,  우엉, 연근,  버섯(표고버섯), 푸른잎채소</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>섬유소 강화, 혈관청소, 변비예방</dt>
                                <dd> 국 야채건더기, 미역, 곤약, 매끼다시마 + 야채를 기본육수로 사용</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>나트륨 섭취를 줄이는 양념</dt>
                                <dd> 닭가슴살, 돼지, 소고기 기름뺀 부위, 등푸른생선</dd>
                            </dl>
                        </li>
                    </ul>
                    <h3>의도적 제한식재</h3>
                    <ul class="limitary-list">
                        <li>
                            <dl>
                                <dt>저설탕</dt>
                                <dd>설탕사용을 자제하고<br>양파와 무 육수 사용</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>저타트륨</dt>
                                <dd>절임류, 장아찌 등<br>염장식품 제한</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>저지방</dt>
                                <dd>
                                    상온에서 고체가 되는 하얀 기름
                                    <small>(소기름, 돈지, 닭껍질, 트랜스지방)</small><br>사용금지
                                </dd>
                            </dl>
                        </li>
                    </ul>
                    <h3>직접만든 제품을 사용한 정확한 식사</h3>
                    <ul class="arrow-list">
                        <li>
                            여사님들의 정성으로 1인씩 정확히 계량한 양을 조리합니다. 알맞게, 규칙적으로, 꾸준히 식사하시는 것이 중요합니다.
                        </li>
                    </ul>
                    <h3>저녁의 수분은 되도록 적게 편성됩니다.</h3>
                    <ul class="arrow-list">
                        <li>
                            저녁에 섭취하는 수분은 부종을 유발합니다. 국,찌개류는 건더기만 드시도록 교육을 진행하고있습니다. 포크, 젓가락만 사용하는 습관을 강조해드리고 있습니다.
                        </li>
                    </ul>
                    <h3>안전밥상제공</h3>
                    <ul class="arrow-list">
                        <li>
                            SRC만의 Safety Related to Clean system급식을 제공합니다. 안전은 청결과 연결되어있기 때문에 항상 신선하고 안전한 식사제공을 위해 식기소독온도를 82°c로 유지하고있습니다. 이는 식기의 세제잔류량을 최소화하기위한 SRC재활영양팀의 노력입니다. 또한 대기업 위생유통시스템으로 납품받은 식재만을 사용하고 있습니다.  
                        </li>
                    </ul>
                </div>
            </section>
            <section class="nutrition-balance">
                <div class="section-header">
                    <h2>
                        SRC재활영양팀은 다양하고 세분화된 재활환자들의 영양균형을 위해 입원 시 환자별 개인 면담을 진행하여,<br>다양한 개인 맞춤식을 제공하고 있습니다. 
                    </h2>
                </div>
                <div class="section-content">
                    <figure>
                        <img src="/images/inpatient/balance_img01.jpg" alt="">
                        <figcaption>
                            일반재활환자의 경우, 환자들의 개인선호도에 따라 조식과 석식을 A식(일반식)과 B식(선택식) 중 선택이 가능합니다. 조식의 경우 B식(선택식)은 빵과 샐러드 우유등이 제공되며, 석식의 경우 덮밥 등 특별한 식사가 제공됩니다. 
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/inpatient/balance_img02.jpg" alt="">
                        <figcaption>
                            다양한 치료가 필요한 재활환자들을 위해 의사와 영양사와의 검사와 진단을 통해 11가지의 전문화된 치료식이 제공됩니다. 연하장애식, 당뇨식, 고혈압식, 경관급식, 간염식, 고지혈증식, 신장질환식(저칼륨식), 영양불량식, 소아식, 저자극식, VIP식등이 있습니다.   
                        </figcaption>
                    </figure>
                    <div class="process">
                        <p>
                            <img src="/images/inpatient/process.jpg" alt="재활병원 입원식단 (영양검사) Process">
                        </p>
                        <h4>재활병원 입원식단 (영양검사) Process</h4>
                    </div>
                </div>
            </section>
            <section class="meal-time">
                <div class="section-header">
                    <h2>환자 식사시간 안내 </h2>
                </div>
                <div class="table-wrap">
                    <table class="table table-border">
                        <colgroup>
                            <col style="width: 170px;">
                            <col style="width: 500px;">
                            <col style="width: 500px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>하절기 (3월 ~ 10월)</th>
                                <th>동절기 (11월 ~ 2월)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>조식</td>
                                <td>am 7:30-8:00</td>
                                <td>am 7:50-8:20</td>
                            </tr>
                            <tr>
                                <td>중식</td>
                                <td colspan="2">pm 12:00 – 12:30</td>
                            </tr>
                            <tr>
                                <td>석식</td>
                                <td colspan="2">pm 17:30 – 18:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>
                    SRC재활영양팀의 식사는 진심과 본심에서 시작됩니다. 환자분들이 식사에 대한 신뢰를 가지고 함께 해주시길 바랍니다.  과거부터 현재를 거처 앞으로도 의도된 건강재활식을 제공하겠습니다. 
                </p>
            </section>
            <section class="vow">
                <div class="section-header">
                    <h2>영양팀의 서약</h2>
                </div>
                <div class="section-content">
                    <h3>우리의 "4C" 서약</h3>
                    <ul>
                        <li>
                            <dl>
                                <dt>솜C</dt>
                                <dd>우리는 환자에게<br>맛있는 식사를 위한<br>솜씨를 키우겠습니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>맵C</dt>
                                <dd>우리는 환자에게<br>믿음을 주는 청결한<br>맵씨를 키우겠습니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>말C</dt>
                                <dd>우리는 환자에게<br>공손하고 친절한<br>말씨로 응대하겠습니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>맘C</dt>
                                <dd>우리는 환자에게<br>정성스런 마음씨로<br>준비하겠습니다.</dd>
                            </dl>
                        </li>
                    </ul>
                </div>    
            </section>
            <section class="counsel">
                <div class="section-header">
                    <h2>영양 상담 관리</h2>
                </div>
                <h3>
                    본원은 치료식 환우들에 대한 1:1 상담을 통하여 자기관리 능력을 키울 수 있도록 도움을 주고자 영양 상담실을 운영하고 있습니다.
                </h3>
                <ul class="arrow-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>영양 상담실</dt>
                            <dd> 재활병원 영양팀 입구 (영양상담실)</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>상담 가능 시간</dt>
                            <dd> 월~금 PM 14:00~16:00(환자방문 대행 간병인 상담도 가능)</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>TEL</dt>
                            <dd> 031) 799-3745</dd>
                        </dl>
                    </li>
                </ul>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>