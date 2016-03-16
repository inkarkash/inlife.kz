$(document).ready(function() {

	$("#message").submit(function() {
		$.ajax({
			type: "POST",
			url: "./assets/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$("#message").trigger("reset");
			alert("Спасибо за вашу заявку, мы скоро свяжемся с вами!");
			// $('#alertsuccess').show();
		}).fail(function(){
			$(this).find("input").val("");
			$("#message").trigger("reset");
			alert("Ошибка!!!");
		});
		return false;
	});
});