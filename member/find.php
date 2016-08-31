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
                <li class="active">아이디 비밀번호 찾기</li>
            </ol>
        </div>
    </div>
    <main id="content" class="member find">
        <div class="page-header">
            <h2>아이디 비밀번호 찾기</h2>
            <small>ID / PW</small>
        </div>
        <div class="member-content">
			<?
			$member_code = "Search";
			include $dir."/module/member.php";
			?>
            <!--div class="container">
                <section class="find-section find-id">
                    <div class="section-header text-center">
                        <h3>아이디 찾기</h3>
                        <p>가입하신 이메일로 아이디를 전송해 드립니다.</p>
                    </div>
                    <div class="find-form find-id-form">
                        <form>
                            <div class="form-group">
                                <label for="find-id-name" class="sr-only">이름</label>
                                <input id="find-id-name" class="form-control" type="text" name="#" placeholder="이름">
                            </div>
                            <div class="form-group">
                                <label for="find-id-email" class="sr-only">이메일</label>
                                <input id="find-id-email" class="form-control" type="email" name="#" placeholder="이메일">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-block">확인</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="find-section find-pw">
                    <div class="section-header text-center">
                        <h3>비밀번호 찾기</h3>
                        <p>가입하신 이메일로 비밀번호를 전송해 드립니다.</p>
                    </div>
                    <div class="find-form find-pw-form">
                        <form>
                            <div class="form-group">
                                <label for="find-pw-name" class="sr-only">이름</label>
                                <input id="find-pw-name" class="form-control" type="text" name="#" placeholder="이름">
                            </div>
                            <div class="form-group">
                                <label for="find-pw-id" class="sr-only">아이디</label>
                                <input id="find-pw-id" class="form-control" type="text" name="#" placeholder="아이디">
                            </div>
                            <div class="form-group">
                                <label for="find-pw-email" class="sr-only">이메일</label>
                                <input id="find-pw-email" class="form-control" type="email" name="#" placeholder="이메일">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="submit" class="btn btn-block">확인</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
            </div-->
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>