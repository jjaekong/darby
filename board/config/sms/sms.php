<!-- action에 해당하는 내용은 2가지가 제공이 됩니다. -->
<!-- 웹소켓전송(sms_socket.php)/데이터베이스전송(sms_mysql.php)적절히 이용하십시오. -->
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