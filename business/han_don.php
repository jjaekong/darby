<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet" />
<link href="/assets/css/business.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">사업소개</a></li>
				<li class="active">제품소개</li>
			</ol>
			<hr>
			<h1>제품소개</h1>
			<p>다비육종의 사업 및 제품을 소개합니다.</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="business han-don">
		<div class="container">
			<nav class="navbar">
				<ul class="nav navbar-nav">
					<li><a href="/business/breeding_pig.php">종동</a></li>
					<li><a href="/business/darbyqueen.php">F1</a></li>
					<li><a href="/business/xperm.php">엑스펌</a></li>
					<li class="active"><a href="/business/han_don.php">한돈</a></li>
					<li><a href="#">구입문의</a></li>
				</ul>
			</nav>
			<section class="handon">
				<div class="section-header">
					<h3>웰팜한돈</h3>
					<hr>
				</div>
				<p>
					<img src="/assets/images/business/handon.jpg" alt="웰팜한돈">
				</p>
				<h4>대한민국 0.3% 얼룩돼지</h4>
				<p><i></i><i></i><i></i></p>
			</section>
		</div>
	</main>
<style type="text/css">
/* han-don */
.business.han-don .container {
	padding:80px 15px 150px;
}
.business.han-don .container .handon
</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
