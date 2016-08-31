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
                <li class="active">로그인</li>
            </ol>
        </div>
    </div>
    <main id="content" class="member login">
        <div class="page-header">
            <h2>로그인</h2>
            <small>Login</small>
        </div>
		<?
		$member_code = "Login";
		include $dir."/module/member.php";
		?>
        <!--div class="member-content">
            <section class="login-section">
                <div class="section-header text-center">
                    <h3>LOGIN</h3>
                    <p>SRC 재활병원 서비스를 이용하시려면 로그인이 필요합니다.</p>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label for="login-id" class="sr-only">아이디</label>
                            <input id="login-id" class="form-control" type="text" name="#" placeholder="아이디를 입력해 주세요">
                        </div>
                        <div class="form-group">
                            <label for="login-pw" class="sr-only">비밀번호</label>
                            <input id="login-pw" class="form-control" type="password" name="#" placeholder="비밀번호를 입력해 주세요">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-block">로그인</button>
                            </p>
                        </div>
                    </form>
                    <div class="help-member">
                        <ul>
                            <li><a href="#">회원가입</a></li>
                            <li><a href="#">아이디, 비밀번호 찾기</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div-->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>