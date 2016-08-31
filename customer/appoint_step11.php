<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/customer.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">고객서비스</a></li>
                <li class="active">온라인 예약</li>
            </ol>
        </div>
    </div>
    <main id="content" class="customer appoint step1">
        <div class="page-header">
            <h2>온라인 예약</h2>
        </div>
        <div class="steps">
            <div class="container">
                <ol>
                    <li><p>로그인<br><small>(비회원일 경우<br>회원가입을 먼저 해주세요)</small></p></li>
                    <li class="active"><p>희망날짜,<br>의료진 및 진료시간 선택</p></li>
                    <li><p>예약 신청 내용 확인</p></li>
                    <li><p>완료 후 예약일에 방문</p></li>
                </ol>
            </div>
        </div>
        <div class="container">
            <section class="schedule">
                <header>
                    <h3>2016년 5월</h3>
                    <a class="prev" href="#"><img src="/images/customer/ico_arrow_left.png" alt="이전 달 보기"></a>
                    <a class="next" href="#"><img src="/images/customer/ico_arrow_right.png" alt="다음 달 보기"></a>
                </header>
                <table class="calendar">
                    <caption class="sr-only">예약일을 선택할 수 있는 캘린더</caption>
                    <thead>
                        <tr>
                            <th>일요일</th>
                            <th>월요일</th>
                            <th>화요일</th>
                            <th>수요일</th>
                            <th>목요일</th>
                            <th>금요일</th>
                            <th>토요일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!--
                                ## 클래스명
                                past: 오늘 이전의 모든 날들
                                available: 예약가능
                                impossible: 예약불가능
                            -->
                            <td class="past">
                                <span class="day">1</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">2</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">3</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">4</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">5</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">6</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">7</span>
                                <p class="status">예약불가</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="past">
                                <span class="day">8</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="past">
                                <span class="day">9</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="past">
                                <span class="day">10</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">11</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">12</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available checked" tabindex="0">
                                <span class="day">13</span>
                                <p class="status">예약가능</p>
                                <p class="cover">선택됨</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">14</span>
                                <p class="status">예약불가</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="impossible" tabindex="0">
                                <span class="day">15</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">16</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">17</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">18</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">19</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">20</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">21</span>
                                <p class="status">예약불가</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="impossible" tabindex="0">
                                <span class="day">22</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">23</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">24</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">25</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">26</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">27</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">28</span>
                                <p class="status">예약불가</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="impossible" tabindex="0">
                                <span class="day">29</span>
                                <p class="status">예약불가</p>
                            </td>
                            <td class="available" tabindex="0">
                                <span class="day">30</span>
                                <p class="status">예약가능</p>
                            </td>
                            <td class="impossible" tabindex="0">
                                <span class="day">31</span>
                                <p class="status">예약불가</p>
                            </td>
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
                    <h3>의료진 및 진료시간 선택</h3>
                </div>
                <form>
                <div class="departments">
                    <select class="form-control">
                        <option value="">진료과 선택</option>
                    </select>
                </div>
                <div class="doctor-list" data-toggle="buttons">
                    <ul>
                        <li>
                            <figure>
                                <img src="/images/customer/img_doctor.png" alt="">
                                <figcaption>
                                    <strong>김동진 과장</strong>
                                    <small>재활의학과 전문의</small>
                                </figcaption>
                            </figure>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="#" autocomplete="off"> 오전
                                </label>
                                <label class="btn">
                                    <input type="radio" name="#" autocomplete="off"> 오후
                                </label>
                            </div>
                        </li>
                        <li>
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
                        <li>
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
                        <li>
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
                        <li>
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
                        <li>
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
                        <li>
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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
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