<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">Member</a></li>
                <li class="active">회원가입</li>
            </ol>
        </div>
    </div>
    <main id="content" class="member join terms">
        <div class="page-header">
            <h2>회원가입</h2>
            <small>Join</small>
        </div>
		<?
		$member_code = "Agree";
		include $dir."/module/member.php";
		?>
        <!--div class="member-content">
            <div class="terms-section">
                <section>
                    <div class="section-header">
                        <h3>개인정보 취급방침</h3>
                    </div>
                    <div class="terms-area">
                        
                    </div>
                    <div class="agree-terms">
                        <p>RC재활병원 개인정보취급방침에 동의합니다.</p>
                        <p>
                            <label><input type="radio" name="#" value=""> 동의함</label>
                            <label><input type="radio" name="#" value=""> 동의안함</label>
                        </p>
                    </div>
                </section>
                <section>
                    <div class="section-header">
                        <h3>이용약관</h3>
                    </div>
                    <div class="terms-area">
                        
                    </div>
                    <div class="agree-terms">
                        <p>SRC재활병원 이용약관에 동의합니다.</p>
                        <p>
                            <label><input type="radio" name="#" value=""> 동의함</label>
                            <label><input type="radio" name="#" value=""> 동의안함</label>
                        </p>
                    </div>
                </section>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-next">다음</a>
                        <a href="#" class="btn btn-cancel">취소</a>
                    </p>
                </div>
            </div>
        </div-->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>