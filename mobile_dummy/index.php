<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="/mobile/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content">
        <div class="visual">
            <ul>
                <li style="background-image: url(/mobile/images/main/bg_visual_1.jpg)">
                    <h3>외래환자</h3>
                    <hr>
                    <p>경기도 광주시에서 통증치료 가장 잘하는 병원<br>국내 최고의 의료진이 함께하는 SRC재활병원입니다.</p>
                    <a href="#">자세히 보기</a>
                </li>
                <li style="background-image: url(/mobile/images/main/bg_visual_1.jpg)">
                    <h3>외래환자</h3>
                    <hr>
                    <p>경기도 광주시에서 통증치료 가장 잘하는 병원<br>국내 최고의 의료진이 함께하는 SRC재활병원입니다.</p>
                    <a href="#">자세히 보기</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <section class="contact">
                <a href="tel:0317999713">
                    <h4>전화 예약 및 진료상담</h4>
                    <p>031-799-9713</p>
                </a>
            </section>
            <div class="banners">
                <ul class="row">
                    <li class="col-xs-6"><a href="#">진료과목</a></li>
                    <li class="col-xs-6"><a href="#">온라인 예약</a></li>
                    <li class="col-xs-6"><a href="#">층별안내</a></li>
                    <li class="col-xs-6"><a href="#">오시는 길</a></li>
                </ul>
            </div>
            <section class="doctors">
                <h3>SRC재활병원 <b>전문의료진</b>이<br><b>최고의 의료서비스</b>를 제공합니다.</h3>
                <p>국내 재활의료서비스를 선도하는<br>대한민국 대표 SRC재활병원의 의료진을 소개합니다.</p>
            </section>
            <section class="news">
                <a href="#">
                    <h4>SRC소식</h4>
                    <p>[공지] SRC재활병원 보건복지부, 의료기관인증, 보건복지부, 의료기관인증</p>
                </a>
            </section>
            <section class="review">
                <a href="#">
                    <h4>치료후기</h4>
                    <p>[교정클리닉] SRC병원 덕에 광주시민 됐어요! SRC병원 덕에 광주시민 됐어요!</p>
                </a>
            </section>
            <div class="quick">
                <ul>
                    <li><a href="#">1:1문의</a></li>
                    <li><a href="#">진료시간</a></li>
                    <li><a href="#">증명서 발급</a></li>
                    <li><a href="#">셔틀버스</a></li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $('.visual ul').bxSlider({
                controls: false
            });
        })(jQuery);
    </script>
</body>
</html>