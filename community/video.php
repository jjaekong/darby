 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/community.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">커뮤니티</a></li>
				<li class="active">영상게시판</li>
			</ol>
		</div>
	</div>
	<main id="content" class="community video"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
		<div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
			<h2>영상게시판</h2>
		</div>
		<?
		$workType = "movie";
		include $dir."/module/board.php";
		?>
		<!-- 실제 작업 영역 --
		<div class="container">
			<article class="video-list">
				<header>
					<div class="filter-dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								전체 <span class="glyphicon glyphicon-menu-down"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">분류 #1</a></li>
								<li><a href="#">분류 #2</a></li>
								<li><a href="#">분류 #3</a></li>
								<li><a href="#">분류 #4</a></li>
							</ul>
						</div>
					</div>
					<div class="search-form">
						<form>
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
				</header>
				<ul class="list">
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트SRC 동영상 테스트SRC 동영상 테스트SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/no_img.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/video_img01.jpg" alt="영상사진">
								<figcaption>
									<h3>SRC 동영상 테스트</h3>
									<p>2016. 01. 01 <span> SRC병원</span></p>
								</figcaption>
							</figure>
						</a>
					</li>
				</ul>
				<div class="btn-area">
					<p>
						<a href="#" class="btn-pink" role="button">글쓰기</a>
					</p>
				</div>
				<nav class="paging">
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">&lsaquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="ellipsis"><span class="glyphicon glyphicon-option-horizontal"></span></li>
						<li><a href="#">10</a></li>
						<li><a href="#">&rsaquo;</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</nav>
			</article>
		</div>
		-- // 실제 작업 영역 -->
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
