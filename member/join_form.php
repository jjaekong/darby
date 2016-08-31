<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/jquery-ui.min.css" rel="stylesheet">
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
    <main id="content" class="member join form">
        <div class="page-header">
            <h2>회원가입</h2>
            <small>Join</small>
        </div>
		<?
		$member_code = "Join";
		include $dir."/module/member.php";
		?>
        <!--div class="member-content">
            <section class="join-section"> 
                <div class="section-header">
                    <h3>회원정보입력 <small>아래의 정보를 빠짐없이 입력해주세요.</small></h3>
                </div>
                <div class="join-form">
                    <form>
                        <table class="table">
                            <colgroup>
                                <col style="width: 220px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="join-id">아이디</label></th>
                                    <td><input id="join-id" class="form-control" type="text" name="#"></td>
                                </tr>
                                <tr>
                                    <th><label for="join-name">이름</label></th>
                                    <td><input id="join-name" class="form-control" type="text" name="#"></td>
                                </tr>
                                <tr>
                                    <th><label for="join-pw">비밀번호</label></th>
                                    <td><input id="join-pw" class="form-control" type="password" name="#"></td>
                                </tr>
                                <tr>
                                    <th><label for="join-repw">비밀번호확인</label></th>
                                    <td><input id="join-repw" class="form-control" type="password" name="#"></td>
                                </tr>
                                <tr>
                                    <th><label for="join-email">이메일</label></th>
                                    <td><input id="join-email" class="form-control" type="email" name="#"></td>
                                </tr>
                                <tr class="birth">
                                    <th><label for="join-birth">생년월일</label></th>
                                    <td>
                                        <input id="join-birth" class="form-control" type="text" name="#">
                                    </td>
                                </tr>
                                <tr class="gender">
                                    <th>성별</th>
                                    <td>
                                        <label>
                                            <input type="radio" name="#"> 남자
                                        </label>
                                        <label>
                                            <input type="radio" name="#"> 여자
                                        </label>
                                    </td>
                                </tr>
                                <tr class="addr">
                                    <th><label for="join-addr-zipcode">주소</label></th>
                                    <td>
                                        <div class="zipcode">
                                            <input id="join-addr-zipcode" class="form-control" type="text" name="#">
                                            <button type="button" class="btn">우편번호 검색</button>
                                        </div>
                                        <div class="default">
                                            <label for="join-addr-default" class="sr-only">기본주소</label>
                                            <input id="join-addr-default" class="form-control" type="text" name="#">
                                        </div>
                                        <div class="details">
                                            <label for="join-addr-details" class="sr-only">기본주소</label>
                                            <input id="join-addr-details" class="form-control" type="text" name="#">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="phone">
                                    <th><label for="join-phone">전화번호</label></th>
                                    <td><input id="join-phone" class="form-control" type="text" name="#"></td>
                                </tr>
                                <tr class="mobile">
                                    <th><label for="join-mobile">휴대전화</label></th>
                                    <td><input id="join-mobile" class="form-control" type="text" name="#"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-join">가입완료</button>
                                <a href="#" class="btn btn-back">이전으로</a>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
        </div-->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/js/member.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script>
        $('#join-birth').datepicker({
            dateFormat: 'yy-mm-dd',
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            dayNames: ['일','월','화','수','목','금','토'],
            dayNamesShort: ['일','월','화','수','목','금','토'],
            dayNamesMin: ['일','월','화','수','목','금','토'],
            showMonthAfterYear: true,
            yearSuffix: '년',
            defaultDate: "-40y",
            changeYear: true,
            changeMonth: true,
            showOn: "button",
            buttonImage: "/images/member/ico_calendar.png",
            buttonImageOnly: true
        });
    </script>
</body>
</html>