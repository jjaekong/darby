<?

########## Ŭ���� ���� ���� ##########
include "class.sms.php";

########## ������ ���� �ޱ� ##########
// php.ini �������� register_globals = Off �� ���
// POST ��� : $HTTP_POST_VARS[]
// GET ��� : $HTTP_GET_VARS[]
// �� ���޹޾� ����Ͻñ� �ٶ��ϴ�.

## register_globals = Off �̰� POST ����� ��� ##
$arrCallNo = $HTTP_POST_VARS["arrCallNo"];
$strCallBack = $HTTP_POST_VARS["strCallBack"];
$strMsg = $HTTP_POST_VARS["strMsg"];
$NOWLATER = $HTTP_POST_VARS["NOWLATER"];
$rsvYear = $HTTP_POST_VARS["rsvYear"];
$rsvMonth = $HTTP_POST_VARS["rsvMonth"];
$rsvDay = $HTTP_POST_VARS["rsvDay"];
$rsvHour = $HTTP_POST_VARS["rsvHour"];
$rsvMinute = $HTTP_POST_VARS["rsvMinute"];

########## �迭�� �����ϱ� ##########
$strGroup = explode(",",$arrCallNo);
$GroupCNT = sizeof($strGroup);

########## ���������� ��� ##########
if ($NOWLATER == "LATER") {

	## �������� ���Ŀ� ���߱� ##
	$rsvMonth = (int)$rsvMonth;
	if ($rsvMonth < 10) { $rsvMonth = "0".$rsvMonth; }

	$rsvDay = (int)$rsvDay;
	if ($rsvDay < 10) { $rsvDay = "0".$rsvDay; }

	$rsvHour = (int)$rsvHour;
	if ($rsvHour < 10) { $rsvHour = "0".$rsvHour; }

	$rsvMinute = (int)$rsvMinute;
	if ($rsvMinute < 10) { $rsvMinute = "0".$rsvMinute; }

	## �������� üũ ##
	// �������� �����Ϻ��� ���̸� ����
	$c_rsvYear = Date(Y);
	$c_rsvMonth = Date(m);
	$c_rsvDay = Date(d);
	$c_rsvHour = Date(H);
	$c_rsvMinute = Date(i);

	Check_Date($rsvYear, $c_rsvYear, $rsvMonth, $c_rsvMonth, $rsvDay, $c_rsvDay, $rsvHour, $c_rsvHour);

	## ���� ���� ���Ŀ� �°� ġȯ ##
	$rsvDate = $rsvYear.$rsvMonth.$rsvDay;
	$rsvTime = $rsvHour.$rsvMinute;
} else {
	$rsvDate = "";
	$rsvTime = "";
}

########## SMS �����ͺ��̽��� �Է��ϱ� ##########
$MySQL = new MySQL;
$result = $MySQL->Open();	// SMS �����ͺ��̽� ���� ����

$success = $fail = 0;
for($i=0; $i < $GroupCNT; $i++) {
	$result = $MySQL->Insert($strGroup[$i],$strCallBack,$strMsg,$rsvDate,$rsvTime); // SMS �����ͺ��̽� ���� �޽��� �Է�
	if (!$result) {
		$fail ++;
	} else {
		$success ++;
	}
}

echo "�� ".$GroupCNT."�� ��<br>���� : ".$success."�� �Է� ���� <br>���� : ".$fail."�� �Է� ����";

$result = $MySQL->Close();	// SMS �����ͺ��̽� ���� ����
?>