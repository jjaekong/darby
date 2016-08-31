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
	<main id="content" class="community photo list">
		<div class="page-header">
			<h2>영상게시판</h2>
		</div>
		<?
		$workType = "movie";
		include $dir."/module/board.php";
		?>
		<!--div class="container">
			<div class="search-bar">
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
			</div>
			<div class="photo-list">
				<ul>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_gray.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다. 김**님의 전/후 사진입니다. 김**님의 전/후 사진입니다. 김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_pink.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_gray.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_pink.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_gray.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_pink.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_gray.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="#">
							<figure>
								<img src="/images/community/img_photo_pink.png" alt="">
								<figcaption>
									<h4>김**님의 전/후 사진입니다.</h4>
									<ul>
										<li>2016.04.03</li>
										<li><span class="glyphicon glyphicon-eye-open"></span>240</li>
									</ul>
								</figcaption>
							</figure>
						</a>
					</li>
				</ul>
			</div>
			<div class="btn-area">
				<p>
					<a href="#" class="btn btn-more">더보기</a>
				</p>
			</div>
		</div-->
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/js/photo.js"></script>
</body>
</html>