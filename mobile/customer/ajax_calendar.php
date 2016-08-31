<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";

if (!function_exists("get_first_day")) {
	// mktime() 함수는 1970 ~ 2038년까지만 계산되므로 사용하지 않음
	// 참고 : http://phpschool.com/bbs2/inc_view.html?id=3924&code=tnt2&start=0&mode=search&s_que=mktime&field=title&operator=and&period=all
	function get_first_day($year, $month)
	{
		$day = 1;
		$spacer = array(0, 3, 2, 5, 0, 3, 5, 1, 4, 6, 2, 4);
		$year = $year - ($month < 3);
		$result = ($year + (int) ($year/4) - (int) ($year/100) + (int) ($year/400) + $spacer[$month-1] + $day) % 7;
		return $result;
	}
}

$today = getdate(time());

$year  = (int)substr($schedule_ym, 0, 4);
$month = (int)substr($schedule_ym, 4, 2);
if ($year  < 1)                $year  = $today[year];
if ($month < 1 || $month > 12) $month = $today[mon];
$current_ym = sprintf("%04d%02d", $year, $month);

$end_day = array(1=>31, 28, 31, 30 , 31, 30, 31, 31, 30 ,31 ,30, 31);
// 윤년 계산 부분이다. 4년에 한번꼴로 2월이 28일이 아닌 29일이 있다.
if( $year%4 == 0 && $year%100 != 0 || $year%400 == 0 )
	$end_day[2] = 29; // 조건에 적합할 경우 28을 29로 변경

// 1일의 첫번째 요일 (0:일, 1:월 ... 6:토)
$first_day = get_first_day($year, $month);
// 해당월의 마지막 날짜,
$last_day  = $end_day[$month];

if ($month - 1 < 1) {
	$before_ym = sprintf("%04d%02d", ($year-1), 12);
} else {
	$before_ym = sprintf("%04d%02d", $year, ($month-1));
}

$before_m = date("m",strtotime($before_ym."01"));

if ($month + 1 > 12) {
	$after_ym  = sprintf("%04d%02d", ($year+1), 1);
} else {
	$after_ym  = sprintf("%04d%02d", $year, ($month+1));
}

$after_m = date("m",strtotime($after_ym."01"));

$fd = $year."-".$month."-01";
$ed = $year."-".$month."-".$last_day;
$hollyday_array = array();
$hsql = " select * from ".$site_prefix."hollyday where 1=1 order by idx asc ";
$hresult = sql_query($hsql);
for($i=0;$hrow = sql_fetch_array($hresult);$i++){
	$hlist[$i] = $hrow;
	$hollyday_array[$i] = $hrow["cdate"];
}
?>
<header>
	<h3><?=$year?>년 <?=$month?>월</h3>
	<a class="prev" href="javascript:;" onclick="move_ym('<?=$before_ym?>')"><img src="/images/customer/ico_arrow_left.png" alt="이전 달 보기"></a>
	<a class="next" href="javascript:;" onclick="move_ym('<?=$after_ym?>')"><img src="/images/customer/ico_arrow_right.png" alt="다음 달 보기"></a>
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
		<?
		$cnt = $day = 0;

		for ($i=0; $i<6; $i++) {
			echo "<tr>\n";
			for ($k=0; $k<7; $k++) {
				$cnt++;

				$day_class = "";
				$add_class = "";
				$link_href = "";
				$day_surfix = "";

				if($k > 0 && $k < 6) $in_week = true;
				else $in_week = false;

				if ($cnt > $first_day) {
					$day++;
					if ($day <= $last_day) { //월에 해당하는 날들
						$current_ymd = $current_ym . sprintf("%02d", $day);
						
						if(!in_array($current_ymd,$hollyday_array) && $in_week && $current_ymd >= date("Ymd",time()+(60*60*24*2)) && $current_ymd <= date("Ymd",time()+(60*60*24*30))){
							$day_class = "available";
						//	$day_surfix = '<p class="status">예약가능</p>';
						} else {
							$day_class = "impossible";
						//	$day_surfix = '<p class="status">예약불가</p>';
						}

						if(strtotime($current_ymd) < time()){
							$day_class = "past";
						}

						if(strtotime($rdate) == strtotime($current_ymd)) $add_class = " checked";

						echo "<td class='".$day_class." ".$add_class."' cymd='".date("Y-m-d",strtotime($current_ymd))."'>".$day.$day_surfix."</td>";
					} else { //월의 마지막날 이후의 빈칸
						echo "<td>&nbsp;</td>";
					}
				} else { //1일 이전의 빈칸
					echo "<td>&nbsp;</td>";
				}
			}
			echo "</tr>\n";
			if($day >= $last_day)
				break;
		}
		?>
	</tbody>
</table>
<ul class="notice">
	<li>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</li>
	<li>홈페이지 예약확인 및 전화예약은 (상담전화 : 031-799-3713, 3817)로 주시기 바랍니다.</li>
	<li>본원의 모든 의료진의 진료예약의 경우 조기마감 될 수 있으니 예약 후 진료예약실에 확인해주시기 바랍니다.</li>
</ul>