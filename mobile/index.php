<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="/mobile/css/main.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content">
		<div class="visual">
			<ul>
				<?
				$blist = get_banner("M4");
				for($i=0;$i<sizeof($blist);$i++){
				?>
				<li style="background-image: url(<?=$blist[$i]["files"][0]["path"]?>/<?=$blist[$i]["files"][0]["file_source"]?>)">
					<h3><?=$blist[$i]["bcat"]?></h3>
					<hr>
					<p><?=$blist[$i]["bcon"]?></p>
					<? if($blist[$i]["blink"]){ ?>
					<a href="<?=$blist[$i]["blink"]?>">자세히 보기</a>
					<? } ?>
				</li>
				<? } ?>
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
					<li class="col-xs-6"><a href="/mobile/departments/rehabilitation.php">진료과목</a></li>
					<li class="col-xs-6"><a href="/mobile/customer/appoint_login.php">온라인 예약</a></li>
					<li class="col-xs-6"><a href="#">둘러보기</a></li>
					<li class="col-xs-6"><a href="/mobile/introduce/location.php">오시는 길</a></li>
				</ul>
			</div>
			<section class="doctors">
				<h3>SRC재활병원 <b>전문의료진</b>이<br><b>최고의 의료서비스</b>를 제공합니다.</h3>
				<p>국내 재활의료서비스를 선도하는<br>대한민국 대표 SRC재활병원의 의료진을 소개합니다.</p>
			</section>
			<section class="news">
				<?
				$sql = " select * from ".$site_prefix."board_notice where 1=1 order by BoardIdx desc limit 0, 1 ";
				$row = sql_fetch($sql);
				?>
				<a href="/mobile/community/news_list.php?board_code=board_view&BoardIdx=<?=$row["BoardIdx"]?>">
					<h4>SRC소식</h4>
					<p><? if($row["Category"]){ echo "[".$row["Category"]."] "; }?><?=$row["Title"]?></p>
				</a>
			</section>
			<section class="review">
				<?
				$sql = " select * from ".$site_prefix."board_mainAfter where bd1 = 'Y' and Category = '모바일' order by border desc limit 0, 1 ";
				$row = sql_fetch($sql);
				?>
				<a href="javascript:;">
					<h4>치료후기</h4>
					<p><?=$row["Title"]?></p>
				</a>
			</section>
			<div class="quick">
				<ul>
					<li><a href="tel:15773622">전화문의</a></li>
					<li><a href="#">진료시간</a></li>
					<li><a href="/mobile/customer/certificate.php">증명서 발급</a></li>
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