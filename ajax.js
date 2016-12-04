$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "communication.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо))");
			$("#form").trigger("reset");
		});
		return false;
	});

});
