<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
<link href="/mobile/css/customer_reserve.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer appoint-step1">
		<div class="page-title">
			<h2>온라인 예약</h2>
		</div>
		<div class="container">
			<ol class="steps">
				<li>
					<img src="/mobile/images/customer/reserve1.png" alt=""><br>
					<h3>로그인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve2_on.png" alt=""><br>
					<h3>희망날짜, 의료진 및 진료시간 선택</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve3.png" alt=""><br>
					<h3>예약 신청 내용 확인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve4.png" alt=""><br>
					<h3>완료 후 예약일에 방문</h3>
				</li>
			</ol>
            <section class="schedule">
                <header>
                    <h3>2016.05</h3>
                    <a class="prev" href="#"><img src="/mobile/images/customer/ico_arrow_left.png" alt="이전 달" width="6"></a>
                    <a class="next" href="#"><img src="/mobile/images/customer/ico_arrow_right.png" alt="다음 달" width="6"></a>
                </header>
                <ul class="flags">
                    <li>예약가능일</li>
                    <li>예약불가일</li>
                </ul>
                <table class="calendar">
                    <thead>
                        <tr>
                            <th>일</th>
                            <th>월</th>
                            <th>화</th>
                            <th>수</th>
                            <th>목</th>
                            <th>금</th>
                            <th>토</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="past">1</td>
                            <td class="past">2</td>
                            <td class="past">3</td>
                            <td class="past">4</td>
                            <td class="past">5</td>
                            <td class="past">6</td>
                            <td class="past">7</td>
                        </tr>
                        <tr>
                            <td class="past">8</td>
                            <td class="past">9</td>
                            <td class="past">10</td>
                            <td class="past">11</td>
                            <td class="past">12</td>
                            <td class="past">13</td>
                            <td class="past">14</td>
                        </tr>
                        <tr>
                            <td class="past">15</td>
                            <td class="available">16<p class="cover">선택됨</p></td>
                            <td class="impossible">17</td>
                            <td class="available">18</td>
                            <td class="impossible">19</td>
                            <td class="available">20</td>
                            <td class="impossible">21</td>
                        </tr>
                        <tr>
                            <td class="impossible">22</td>
                            <td class="available">23</td>
                            <td class="impossible">24</td>
                            <td class="available">25</td>
                            <td class="impossible">26</td>
                            <td class="available">27</td>
                            <td class="impossible">28</td>
                        </tr>
                        <tr>
                            <td class="impossible">29</td>
                            <td class="available">30</td>
                            <td class="impossible">31</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <ul class="notice">
                    <li>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</li>
                    <li>홈페이지 예약확인 및 전화예약은 (상담전화 : 031-799-3713, 3817)로 주시기 바랍니다.</li>
                    <li>본원의 모든 의료진의 진료예약의 경우 조기마감 될 수 있으니 예약 후 진료예약실에 확인해주시기 바랍니다.</li>
                </ul>
			</section>
			<section class="doctors">
				<div class="section-header">
					<h3>진료시간 및 의료진 선택</h3>
				</div>
                <div class="departs">
                    <select class="form-control">
                        <option value="">진료과 선택</option>
                    </select>
                </div>
                <form>
                <div class="doctor-list" data-toggle="buttons">
                    <ul class="row">
                        <li class="col-xs-6">
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group">
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                        <li class="col-xs-6">
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group">
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn active">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                        <li class="col-xs-6">
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group">
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                        <li class="col-xs-6">
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group">
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                        <li class="col-xs-6">
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group">
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-area">
                    <p>
                        <button type="reset" class="btn btn-cancel">취소</button>
                        <button type="submit" class="btn btn-appoint">진료예약하기</button>
                    </p>
                </div>
                </form>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $(document).on('click', '.schedule .calendar .available', function() {
                $('.schedule .calendar .available.checked').removeClass('checked');
                $('.schedule .calendar .available .cover').remove();
                $(this).addClass('checked');
                $(this).append('<p class="cover">선택됨</p>');
            });
        })(jQuery);
    </script>
</body>
</html>
		
