$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "sendmail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Ваша заявка отправлена");
			$("#form").trigger("reset");
		});
		return false;
	});

});
