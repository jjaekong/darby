<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community news-view">
		<div class="page-title">
			<h2>병원소식</h2>
		</div>
		<section class="view">
			<div class="container">
				<div class="section-header">
					<div class="search-area">
						<form>
							<div class="form-group">
								<select class="form-control">
									<option value="">전체</option>
								</select>
							</div>
							<div class="form-group">
								<label for="search-keyword" class="sr-only">검색어</label>
								<input id="search-keyword" type="text" class="form-control">
							</div>
							<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
						</form>
					</div>
				</div>
				<div class="section-content">
					<div class="view-header">
						<span class="tag">[소식]</span>
						<h4>소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요"</h4>
						<dl>
							<dt>등록일</dt>
							<dd>2016. 04. 03</dd>
							<dt>조회수</dt>
							<dd>120</dd>
						</dl>
					</div>
					<div class="view-content">
						<div>
							<img class="img-responsive" src="/mobile/images/community/news_view_img.gif" alt="" />
						</div>
						<p>
							지난 4월 5일 식목일에 SRC재활병원 영양팀에서는 소아병동의 친구들과 함께 식목일 체험활동을 진행하였습니다.  자연주의적인 SRC식단을 통해 소아친구들의 편식교정을 하기위한 이색적인 체험이었습니다.
						</p>
						<div class="file">
							<p>20160413789456.jpg</p>
						</div>
					</div>
				</div>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-gray">수정</a>
						<a href="#" class="btn btn-gray">삭제</a>
						<a href="#" class="btn btn-gray">목록</a>
					</p>
				</div>
			</div>
		</section>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>