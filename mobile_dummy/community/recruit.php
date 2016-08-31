<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community recruit">
		<div class="page-title">
			<h2>채용정보</h2>
		</div>
		<section class="recruit-info">
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
					<ul class="board-list">
						<li>
							<a href="#">
								<span class="tag">[모집]</span>
								<p>취사원 모집 공고</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[마감]</span>
								<p>언어치료사 인지치료사 모집 공고</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[마감]</span>
								<p>간호조무사 모집 공고</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[마감]</span>
								<p>간호사 모집 공고(외래, 병동, 이브닝킵, 나이트킵) ‥</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[마감]</span>
								<p>물리치료사(통증) 모집 공고</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[마감]</span>
								<p>취사원 모집 공고</p>
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