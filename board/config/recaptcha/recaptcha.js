$(function(){

	$(document).on("click", "#captcha_reload", function(){

		$.ajax({
			type: 'POST',
			url: '/board/config/recaptcha/recaptcha_api.php',
			data: { gubun: "1" },
			cache: false,
			async: false,
			success: function(html) {
				$("fieldset#captcha").after(html);
			}
		});
	});

	$("#captcha_reload").trigger("click");
});

function chk_captcha()
{
	if ($('#g-recaptcha-response').val() == "") {
		alert("자동등록방지를 확인하시기 바랍니다.");
		return false;
	}

	return true;
}
