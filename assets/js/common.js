$(document).ready(function() {

	$("#message").submit(function() {
		$.ajax({
			type: "POST",
			url: "./assets/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$("#message").trigger("reset");
			$('#alertsuccess').show();
		});
		return false;
	});
});