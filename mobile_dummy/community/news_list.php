<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community news-list">
		<div class="page-title">
			<h2>병원소식</h2>
		</div>
		<section class="news">
			<div class="container">
				<div class="section-header">
					<ul class="category" role="tablist">
						<li role="presentation" class="active"><a href="#" role="tab">분류#1</a></li>
						<li role="presentation"><a href="#" role="tab">분류#2</a></li>
						<li role="presentation"><a href="#" role="tab">분류#3</a></li>
						<li role="presentation"><a href="#" role="tab">분류#4</a></li>
						<li role="presentation"><a href="#" role="tab">분류#5</a></li>
						<li role="presentation"><a href="#" role="tab">분류#6</a></li>
						<li role="presentation"><a href="#" role="tab">분류#7</a></li>
						<li role="presentation"><a href="#" role="tab">분류#8</a></li>
						<li role="presentation"><a href="#" role="tab">분류#9</a></li>
					</ul>
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
					<ul class="board-list">
						<li>
							<a href="#">
								<span class="tag">[소식]</span>
								<p>SRC병원 김형빈 진료부장 국제의료기전시회 강의</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[SRC소식]</span>
								<p>소아병동 식목일체험활동 "단호박 밭에 예쁜 채소 소아병동 식목일체험활동 "단호박 밭에 예쁜 채소</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[촬영협조]</span>
								<p>JTBC 드라마 마리앙트완 촬영협조</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[사회사업]</span>
								<p>SRC병원 입원환자 및 보호자들을 위한 명절행사 SRC병원 입원환자 및 보호자들을 위한 명절행사</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[사회사업]</span>
								<p>환자들을 위한 영화상영</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[소식]</span>
								<p>SRC병원 김형빈 진료부장 국제의료기전시회 강의</p>
								<small>2016.04.03</small>
							</a>
						</li>
					</ul>
				</div>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">글쓰기</a>
					</p>
				</div>
				<nav class="paging">
					<ul class="pagination">
						<li>
							<a class="first" href="#" aria-label="처음 페이지"><img src="/mobile/images/ico_double_arrow_left.png" height="7" alt=""></a>
						</li>
						<li>
							<a class="prev" href="#" aria-label="이전 페이지"><img src="/mobile/images/ico_arrow_left.png" height="7" alt=""></a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a class="next" href="#" aria-label="다음 페이지"><img src="/mobile/images/ico_arrow_right.png" height="7" alt=""></a>
						</li>
						<li>
							<a class="last" href="#" aria-label="마지막 페이지"><img src="/mobile/images/ico_double_arrow_right.png" height="7" alt=""></a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>