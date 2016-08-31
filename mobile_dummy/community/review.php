<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community review">
		<div class="page-title">
			<h2>치료후기</h2>
		</div>
		<section class="review-list">
			<div class="container">
				<div class="section-header">
					<nav class="tab-menu">
						<ul>
							<li class="active"><a href="#">외래</a></li>
							<li><a href="#">입원</a></li>
						</ul>
					</nav>
					<ul class="category" role="tablist">
						<li role="presentation"><a href="#" role="tab">분류#1</a></li>
						<li role="presentation" class="active"><a href="#" role="tab">분류#2</a></li>
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
								<span class="tag">[통증외래]</span>
								<p>SRC병원이 있어 든든합니다! - 황○○님</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[소아낮병동]</span>
								<p>SRC병원 덕에 광주시민 됐어요! - 남○○님</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[입원재활치료]</span>
								<p>끝까지 최선을 다하는 모습 - 이○○님</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[재활치료]</span>
								<p>언제든지 운동할 수 있는 환경과 선생님들의 최선언제든지 운동할 수 있는 환경과 선생님들의 최선언제든지 운동할 수 있는 환경과 선생님들의 최선</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[낮병동]</span>
								<p>아이들이 존중받고 치료받을 수 있는 병원</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[통증외래]</span>
								<p>SRC병원이 있어 든든합니다! - 황○○님</p>
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