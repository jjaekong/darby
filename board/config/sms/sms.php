<!-- action�� �ش��ϴ� ������ 2������ ������ �˴ϴ�. -->
<!-- ����������(sms_socket.php)/�����ͺ��̽�����(sms_mysql.php)������ �̿��Ͻʽÿ�. -->
<form name="MsgForm" method="post" action="sms_socket.php" target="hiddenframe">
<input type="hidden" name="arrCallNo" value="<?=$recv_number?>">
<input type="hidden" name="strMsg" value="<?=$sms_contents?>">
<input type="hidden" name="strCallBack" value="<?=$send_number?>">
<input type="hidden" name="NOWLATER" value="NOW">
</form>
<script>
alert('sms.php');
document.MsgForm.submit();
</script>