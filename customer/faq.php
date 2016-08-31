<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/customer.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">고객서비스</a></li>
				<li class="active">자주하는 질문</li>
			</ol>
		</div>
	</div>
	<main id="content" class="community customer faq">
		<div class="page-header">
			<h2>자주하는 질문</h2>
		</div>
		<?
		$workType = "faq";
		include $dir."/module/board.php";
		?>
		<!--div class="container">
			<div class="search-bar">
				<div class="search-form">
					<form lpformnum="1">
						<div class="form-group">
							<select class="form-control">
								<option value="">전체</option>
							</select>
							<label for="search-keyword" class="sr-only">검색어</label>
							<input id="search-keyword" type="text" class="form-control">
						</div>
						<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</div>
			<div class="faq-list">
				<ul>
					<li class="active">
						<a class="question" href="#"><i class="icon">Q</i>병원 견학을 하고 싶어요.</a>
						<div class="answer">
							<i class="icon">A</i>
							저희 SRC재활병원을 찾아주셔서 감사합니다.<br>
							<br>
							견학시간은 매월 둘째주, 목요일 2시입니다.<br>
							견학을 원하시는 분들은 반드시 견학 2주 전에 연락을 주시어<br>
							스케줄 및 견학 가능 확인하고,<br>
							방문 일자, 인원 수, 방문 목적 등을 고지한 공문서를 <br>
							이메일 혹은 팩스로 보내주시기 바랍니다.<br>
							<br>
							상담전화 : 031)760-3677~9<br>
							팩스 : 031) 760-3624<br>
							E-mail : cochon24@naver.com<br>
						</div>
					</li>
					<li>
						<a class="question" href="#"><i class="icon">Q</i>병원 견학을 하고 싶어요.</a>
						<div class="answer">
							<i class="icon">A</i>
							저희 SRC재활병원을 찾아주셔서 감사합니다.<br>
							<br>
							견학시간은 매월 둘째주, 목요일 2시입니다.<br>
							견학을 원하시는 분들은 반드시 견학 2주 전에 연락을 주시어<br>
							스케줄 및 견학 가능 확인하고,<br>
							방문 일자, 인원 수, 방문 목적 등을 고지한 공문서를 <br>
							이메일 혹은 팩스로 보내주시기 바랍니다.<br>
							<br>
							상담전화 : 031)760-3677~9<br>
							팩스 : 031) 760-3624<br>
							E-mail : cochon24@naver.com<br>
						</div>
					</li>
					<li>
						<a class="question" href="#"><i class="icon">Q</i>병원 견학을 하고 싶어요.</a>
						<div class="answer">
							<i class="icon">A</i>
							저희 SRC재활병원을 찾아주셔서 감사합니다.<br>
							<br>
							견학시간은 매월 둘째주, 목요일 2시입니다.<br>
							견학을 원하시는 분들은 반드시 견학 2주 전에 연락을 주시어<br>
							스케줄 및 견학 가능 확인하고,<br>
							방문 일자, 인원 수, 방문 목적 등을 고지한 공문서를 <br>
							이메일 혹은 팩스로 보내주시기 바랍니다.<br>
							<br>
							상담전화 : 031)760-3677~9<br>
							팩스 : 031) 760-3624<br>
							E-mail : cochon24@naver.com<br>
						</div>
					</li>
				</ul>
			</div>
		</div-->
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script>
		(function($) {
			$(document).on('click', '.faq-list .question', function(e) {
				if ($(this).parent().hasClass('active')) {
					$(this).parent().removeClass('active');
				} else {
					$(this).parent().siblings('.active').removeClass('active');
					$(this).parent().addClass('active');
				}
				e.preventDefault();
			});
		})(jQuery);
	</script>
</body>
</html>