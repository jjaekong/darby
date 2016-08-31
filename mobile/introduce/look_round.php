<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />

</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce look-round">
		<div class="page-title">
			<h2>병원둘러보기</h2>
		</div>
	    <div class="container">
	        <div class="visual">
	            <ul class="slide">
	                <li>
	                    <img src="/mobile/images/introduce/detail_img1.jpg" class="img-responsive" alt="">
	                    <h2>SRC재활병원</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img2.jpg" class="img-responsive" alt="">
	                    <h2>SRC요양병원</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img3.jpg" class="img-responsive" alt="">
	                    <h2>SRC건강증진센터</h2>
	                </li>
                    <li>
	                    <img src="/mobile/images/introduce/detail_img4.jpg" class="img-responsive" alt="">
	                    <h2>SRC요양원</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img5.jpg" class="img-responsive" alt="">
	                    <h2>SRC언어심리상담센터</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img6.jpg" class="img-responsive" alt="">
	                    <h2>SRC보듬터</h2>
	                </li>
                    <li>
	                    <img src="/mobile/images/introduce/detail_img7.jpg" class="img-responsive" alt="">
	                    <h2>SRC스포츠센터</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img8.jpg" class="img-responsive" alt="">
	                    <h2>SRC새롬학교</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img9.jpg" class="img-responsive" alt="">
	                    <h2>SRC법인사무국</h2>
	                </li>
	                <li>
	                    <img src="/mobile/images/introduce/detail_img10.jpg" class="img-responsive" alt="">
	                    <h2>SRC교육관</h2>
	                </li>
	            </ul>
	        </div>
	    </div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        //visual slide
        $('.slide').bxSlider({
            auto: false,
            controls: true, //컨트롤 이전 다음 버튼 유무,
            pager: false, // 페이퍼 사용 유무
            prevText: '<span><img src="/mobile/images/ico_arrow_left.png" alt=""></span>',
	        nextText: '<span><img src="/mobile/images/ico_arrow_right.png" alt=""></span>'
        });
    </script>
</body>
</html>
